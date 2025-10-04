<script setup lang="ts">
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Button } from '@/components/ui/button';
import { LoaderCircle } from 'lucide-vue-next';
import { Form } from '@inertiajs/vue3';
import InputError from '@/components/InputError.vue';
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
import { RadioGroupRoot } from 'reka-ui';
import Radio from '@/components/ui/radio/Radio.vue';

interface Category {
  key: string
  label: string
  money: number
}

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
const selectedFreq = ref('freq_onetime')

const activeAmount = ref('1k')
const charityGauge: Category[] = [
  { key: '100', label: 'GHS 100', money: 100 },
  { key: '200', label: 'GHS 200', money: 200 },
  { key: '500', label: 'GHS 500', money: 500 },
  { key: '1k', label: 'GHS 1,000', money: 1000 },
  { key: '10k', label: 'GHS 10,000', money: 10_000 },
  { key: '100k', label: 'GHS 100,000', money: 0 },
  { key: 'custom', label: 'Custom', money: 0 },
]

</script>

<template>
  <section class="py-16 lg:px-10 bg-white">
    <div class="container-primary">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 text-center mb-4">
        Make a donation
      </h2>
      <p class="text-gray-600 text-center mb-12">
        Every contribution makes a difference.
      </p>

      <Form
        :reset-on-success="['name', 'email', 'subject', 'phone', 'message']"
        v-slot="{ errors, processing }"
        class="space-y-6 border rounded-lg p-4 lg:p-10"
        >

        <h4 class="text-prose font-medium">Choose amount</h4>
        <div class="flex flex-wrap gap-2 mb-8 justify-center lg:justify-start">
            <Button
                v-for="category in charityGauge"
                type="button"
                :key="category.key"
                @click="activeAmount = category.key"
                :class="[
                    'px-6 py-3 rounded-xl text-sm font-medium transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2',
                    activeAmount === category.key
                    ? 'bg-orange-500 text-white shadow-lg'
                    : 'bg-white text-gray-700 hover:bg-gray-100 border border-gray-200'
                ]"
                :aria-pressed="activeAmount === category.key"
                :aria-label="`Filter by ${category.label}`"
            >
            {{ category.label }}
            </Button>
        </div>

        <!-- Custom Amount -->
        <div v-if="activeAmount === 'custom'" class="grid gap-2">
            <Label for="custom_amount">Amount</Label>
            <Input
                id="custom_amount"
                type="number"
                :required="activeAmount === 'custom'"
                :tabindex="-1"
                name="custom_amount"
                placeholder="Enter custom amount here..."
                />
            <InputError :message="errors.name" />
        </div>

        <div class="grid gap-2">
            <Label class="mb-2" for="_">Frequency</Label>
            <RadioGroupRoot v-model="selectedFreq" class="flex flex-col sm:flex-row gap-6">
                <div class="inline-flex items-center gap-2">
                    <Radio id="freq_onetime" value="freq_onetime" />
                    <Label for="freq_onetime" class="cursor-pointer font-normal">One - Time</Label>
                </div>

                <div class="inline-flex items-center gap-2">
                    <Radio id="freq_monthly" value="freq_monthly" />
                    <Label for="freq_monthly" class="cursor-pointer font-normal">Monthly</Label>
                </div>

            </RadioGroupRoot>
            <InputError :message="errors.name" />
        </div>

        <!-- Full Name -->
        <div class="grid gap-2">
            <Label for="name">Name</Label>
            <Input
                id="name"
                type="text"
                required
                autofocus
                :tabindex="1"
                autocomplete="name"
                name="name"
                placeholder="Enter your full name here..."
            />
            <InputError :message="errors.name" />
        </div>

        <!-- Email -->
        <div class="grid gap-2">
            <Label for="email">Email</Label>
            <Input
                id="email"
                type="email"
                required
                autofocus
                :tabindex="2"
                autocomplete="email"
                name="email"
                placeholder="Enter your email-address name here..."
            />
            <InputError :message="errors.name" />
        </div>

        <!-- Phone -->
        <div class="grid gap-2">
            <Label for="phone">Phone Number</Label>
            <Input
                id="phone"
                type="text"
                required
                autofocus
                :tabindex="3"
                autocomplete="tel-national"
                name="phone"
                placeholder="Enter your phone number here..."
            />
            <InputError :message="errors.name" />
        </div>


        <Button
            type="submit"
            class="mt-2 w-full flex gap-4 items-center"
            :tabindex="6"
            :disabled="processing"
            data-test="register-user-button"
        >
            <LoaderCircle
                v-if="processing"
                class="h-4 w-4 animate-spin"
            />
            <span>Donate Now</span>
        </Button>

      </Form>
    </div>
  </section>
</template>
