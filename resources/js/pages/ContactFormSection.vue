<script setup lang="ts">
import { Input } from '@/components/ui/input';
import { Button } from '@/components/ui/button';
import { LoaderCircle, Send, CheckCircle } from 'lucide-vue-next';
import { Form } from '@inertiajs/vue3';
import InputError from '@/components/InputError.vue';
import TextArea from '@/components/ui/textarea/TextArea.vue';
import ContactPageController from '@/actions/App/Http/Controllers/Pages/ContactPageController';
import IntlTelInput from "intl-tel-input/vueWithUtils";
import "intl-tel-input/styles";
import { cn } from '@/lib/utils'
import { ref } from 'vue';

const phoneRef = ref(null);
const phone = ref('');
const country = ref<string | undefined>(undefined);
const phoneError = ref<string | undefined>();
const selectedCountry = ref('');
const phoneIsValid = ref(false);
const errorMap = ref(["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"]);

const phoneValidator = (num: string) => {
    phone.value = num;
    if (!(phoneRef.value as any)?.instance.isValidNumber()) {
        const errorCode = (phoneRef.value as any)?.instance.getValidationError();
        phoneError.value = errorMap.value[errorCode] || "Invalid number";
    } else {
        const countryData = (phoneRef.value as any)?.instance.getSelectedCountryData();
        country.value = (countryData.iso2 as string).toUpperCase();
        console.log('country data:', country.value);

        phoneError.value = undefined;
    }
}


const telOptions = ref({
  strictMode: true,
  initialCountry: "auto",
  geoIpLookup: (callback: (countryCode: string) => void) => {
    fetch("https://ipapi.co/json")
      .then(res => res.json())
      .then(data => callback(data.country_code))
      .catch(() => callback("GH"));
  },
});

</script>

<template>
  <section class="py-16 lg:px-10 bg-white">
    <div class="container-primary">
        <Form
            v-bind="ContactPageController.store.form()"
            :reset-on-success="['name', 'email', 'subject', 'phone', 'message']"
            #default="{ errors, processing, recentlySuccessful }"
            :options="{
                preserveScroll: true,
                preserveState: true,
                preserveUrl: true,
                replace: true,
                only: ['users', 'flash'],
                except: ['secret'],
                reset: ['page'],
            }"
            class="space-y-6 border rounded-lg p-4 lg:p-10"
        >

        <!-- Full Name -->
        <div class="grid gap-2">
            <Label for="name">Name <span class="text-red-600">*</span></Label>
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
            <Label for="email">Email <span class="text-red-600">*</span></Label>
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
            <InputError :message="errors.email" />
        </div>

        
        <input type="hidden" v-model="country" name="country">
        <input type="hidden" v-model="phone" name="phone">
        <!-- Phone -->
        <div class="grid gap-2">
            <Label for="phone">Phone Number <span class="text-red-600">*</span></Label>
            <IntlTelInput
                :class="cn(
                    'file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground dark:bg-input/30 border-input flex h-9 w-full! min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm',
                    'focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]',
                    'aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive',
                )"
                :tabindex="3"
                id="phone"
                ref="phoneRef"
                @changeCountry="(code: string) => selectedCountry = code"
                @changeNumber="phoneValidator"
                @changeValidity="(valid: boolean) => phoneIsValid = valid ?? false"
                :options="telOptions"
            />
            <InputError v-if="phone.trim()" :message="phoneError" />
            <InputError :message="errors.country" />
        </div>

        <!-- City -->
        <div class="grid gap-2">
            <Label for="name">City</Label>
            <Input
                id="city"
                type="text"
                required
                autofocus
                :tabindex="4"
                autocomplete="address-level2"
                name="city"
                placeholder="Enter your city here..."
            />
            <InputError :message="errors.city" />
        </div>

        <!-- organization -->
        <div class="grid gap-2">
            <Label for="name">Organization</Label>
            <Input
                id="organization"
                type="text"
                required
                autofocus
                :tabindex="4"
                autocomplete="organization"
                name="organization"
                placeholder="Enter your organization here..."
            />
            <InputError :message="errors.organization" />
        </div>

        <!-- Subject -->
        <div class="grid gap-2">
            <Label for="subject">Subject <span class="text-red-600">*</span></Label>
            <Input
                id="subject"
                type="text"
                required
                autofocus
                :tabindex="5"
                autocomplete="off"
                name="subject"
                placeholder="Enter your message subject here..."
            />
            <InputError :message="errors.subject" />
        </div>

        <!-- Message -->
        <div class="grid gap-2">
            <Label for="message">Message <span class="text-red-600">*</span></Label>
            <TextArea
                id="message"
                type="text"
                required
                autofocus
                :tabindex="6"
                name="message"
                placeholder="Write your message here..."
            >
            </TextArea>
            <InputError :message="errors.message" />
        </div>

        <Button
            type="submit"
            class="mt-2 w-full!  flex gap-4 items-center"
            :tabindex="6"
            :disabled="processing || (phone.trim() && !phoneIsValid)"
            data-test="register-user-button"
        >
            <LoaderCircle
                v-if="processing"
                class="h-4 w-4 animate-spin"
            />
            <span>Send message</span>
            <Send class="size-4  stroke-amber-50" />
        </Button>

        <div v-if="recentlySuccessful" class="flex items-center gap-4 p-4 text-sm text-brand border border-brand/50 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600" role="alert">
            <CheckCircle class="size-4"/>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">Thank you, your message has been received!</span>
            </div>
        </div>

      </Form>
    </div>
  </section>
</template>
