<script setup lang="ts">
import { Input } from '@/components/ui/input';
import { Button } from '@/components/ui/button';
import { LoaderCircle, Send } from 'lucide-vue-next';
import { Form, Head } from '@inertiajs/vue3';
import InputError from '@/components/InputError.vue';
import { useForm } from '@inertiajs/vue3'
import TextArea from '@/components/ui/textarea/TextArea.vue';

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
  <section class="py-16 lg:px-10 bg-white">
    <div class="container-primary">
      <Form
        :reset-on-success="['name', 'email', 'subject', 'phone', 'message']"
        v-slot="{ errors, processing }"
        class="space-y-6 border rounded-lg p-4 lg:p-10"
        >
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

        <!-- Subject -->
        <div class="grid gap-2">
            <Label for="subject">Subject</Label>
            <Input
                id="subject"
                type="text"
                required
                autofocus
                :tabindex="4"
                autocomplete="tel-national"
                name="subject"
                placeholder="Enter your message subject here..."
            />
            <InputError :message="errors.name" />
        </div>

        <!-- Message -->
        <div class="grid gap-2">
            <Label for="message">Message</Label>
            <TextArea
                id="message"
                type="text"
                required
                autofocus
                :tabindex="5"
                name="message"
                placeholder="Write your message here..."
            >
            </TextArea>
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
            <span>Send message</span>
            <Send class="size-4  stroke-amber-50" />
        </Button>

      </Form>
    </div>
  </section>
</template>
