<script setup lang="ts">
import { ref } from 'vue'
import { useForm } from '@inertiajs/vue3'

const email = ref('')
const isSubmitting = ref(false)
const successMessage = ref('')
const errorMessage = ref('')

const form = useForm({
  email: ''
})

const handleSubmit = async () => {
  if (!email.value) {
    errorMessage.value = 'Please enter your email address'
    return
  }

  // Email validation
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
  if (!emailRegex.test(email.value)) {
    errorMessage.value = 'Please enter a valid email address'
    return
  }

  errorMessage.value = ''
  isSubmitting.value = true

  form.email = email.value
  
  form.post('/newsletter/subscribe', {
    preserveScroll: true,
    onSuccess: () => {
      successMessage.value = 'Thank you for subscribing!'
      email.value = ''
      setTimeout(() => {
        successMessage.value = ''
      }, 5000)
    },
    onError: (errors) => {
      errorMessage.value = errors.email || 'Something went wrong. Please try again.'
    },
    onFinish: () => {
      isSubmitting.value = false
    }
  })
}

const handleInput = () => {
  if (errorMessage.value) {
    errorMessage.value = ''
  }
}
</script>

<template>
  <section 
    class="py-16 px-10 bg-gray-50"
    aria-labelledby="newsletter-heading"
  >
    <div class="container-primary text-center">
      <!-- Heading -->
      <h2 
        id="newsletter-heading"
        class="text-3xl md:text-4xl font-bold text-gray-900 mb-4"
      >
        Stay Updated
      </h2>

      <!-- Description -->
      <p class="text-gray-600 text-base md:text-lg mb-8">
        Get the latest stories of impact delivered to your inbox.
      </p>

      <!-- Newsletter Form -->
      <form 
        @submit.prevent="handleSubmit"
        class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto"
        novalidate
      >
        <div class="flex-1">
          <label for="email" class="sr-only">Email address</label>
          <input
            id="email"
            v-model="email"
            type="email"
            placeholder="Enter your email address"
            class="w-full px-5 py-3 rounded-lg border border-gray-300 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent transition-all duration-200"
            :class="{ 'border-red-500 focus:ring-red-500': errorMessage }"
            :aria-invalid="!!errorMessage"
            :aria-describedby="errorMessage ? 'email-error' : undefined"
            required
            @input="handleInput"
          />
        </div>

        <button
          type="submit"
          class="px-8 py-3 bg-orange-500 text-white font-medium rounded-lg hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed whitespace-nowrap"
          :disabled="isSubmitting"
          :aria-busy="isSubmitting"
        >
          <span v-if="!isSubmitting">Subscribe Now</span>
          <span v-else class="flex items-center gap-2">
            <svg 
              class="animate-spin h-5 w-5" 
              xmlns="http://www.w3.org/2000/svg" 
              fill="none" 
              viewBox="0 0 24 24"
              aria-hidden="true"
            >
              <circle 
                class="opacity-25" 
                cx="12" 
                cy="12" 
                r="10" 
                stroke="currentColor" 
                stroke-width="4"
              />
              <path 
                class="opacity-75" 
                fill="currentColor" 
                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
              />
            </svg>
            Subscribing...
          </span>
        </button>
      </form>

      <!-- Error Message -->
      <div
        v-if="errorMessage"
        id="email-error"
        class="mt-3 text-sm text-red-600"
        role="alert"
        aria-live="polite"
      >
        {{ errorMessage }}
      </div>

      <!-- Success Message -->
      <output
        v-if="successMessage"
        class="mt-3 text-sm text-green-600 flex items-center justify-center gap-2"
        aria-live="polite"
      >
        <svg 
          class="w-5 h-5" 
          fill="currentColor" 
          viewBox="0 0 20 20"
          aria-hidden="true"
        >
          <path 
            fill-rule="evenodd" 
            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" 
            clip-rule="evenodd" 
          />
        </svg>
        {{ successMessage }}
      </output>
    </div>
  </section>
</template>