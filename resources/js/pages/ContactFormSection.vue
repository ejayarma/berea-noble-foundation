<script setup lang="ts">
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  full_name: '',
  email: '',
  phone: '',
  subject: '',
  message: '',
})

const submit = () => {
  form.post('/contact', {
    preserveScroll: true,
    onSuccess: () => {
      form.reset()
    },
  })
}
</script>

<template>
  <section class="py-16 px-10 bg-white">
    <div class="container-primary">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">
        Send Us a Message
      </h2>
      <p class="text-gray-600 text-center mb-12">
        Have questions about our programs or want to get involved? We'd love to hear from you.
        Fill out the form below and we'll respond as soon as possible.
      </p>

      <form @submit.prevent="submit" class="space-y-6 border rounded-lg p-10">
        <!-- Full Name -->
        <div>
          <input
            v-model="form.full_name"
            type="text"
            placeholder="Enter your full name here..."
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500"
          />
          <div v-if="form.errors.full_name" class="text-sm text-red-600 mt-1">
            {{ form.errors.full_name }}
          </div>
        </div>

        <!-- Email -->
        <div>
          <input
            v-model="form.email"
            type="email"
            placeholder="Enter your e-mail address here..."
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500"
          />
          <div v-if="form.errors.email" class="text-sm text-red-600 mt-1">
            {{ form.errors.email }}
          </div>
        </div>

        <!-- Phone -->
        <div>
          <input
            v-model="form.phone"
            type="text"
            placeholder="Enter your phone number here..."
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500"
          />
          <div v-if="form.errors.phone" class="text-sm text-red-600 mt-1">
            {{ form.errors.phone }}
          </div>
        </div>

        <!-- Subject -->
        <div>
          <input
            v-model="form.subject"
            type="text"
            placeholder="Enter your message subject here..."
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500"
          />
          <div v-if="form.errors.subject" class="text-sm text-red-600 mt-1">
            {{ form.errors.subject }}
          </div>
        </div>

        <!-- Message -->
        <div>
          <textarea
            v-model="form.message"
            rows="5"
            placeholder="Write your message here..."
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500"
          ></textarea>
          <div v-if="form.errors.message" class="text-sm text-red-600 mt-1">
            {{ form.errors.message }}
          </div>
        </div>

        <!-- Submit -->
        <div class="text-center">
          <button
            type="submit"
            :disabled="form.processing"
            class="w-full md:w-auto inline-flex justify-center items-center px-6 py-3 rounded-lg text-white bg-orange-500 hover:bg-orange-600 disabled:opacity-50 shadow-md transition"
          >
            <span v-if="!form.processing">Send Message</span>
            <span v-else>Sending...</span>
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3m12 12l-9 6V9l9 6z"/>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </section>
</template>
