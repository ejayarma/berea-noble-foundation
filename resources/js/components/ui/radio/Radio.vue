<script setup lang="ts">
import type { RadioGroupItemProps } from 'reka-ui'
import { cn } from '@/lib/utils'
import { Circle } from 'lucide-vue-next'
import { RadioGroupIndicator, RadioGroupItem, useForwardPropsEmits } from 'reka-ui'
import { computed, type HTMLAttributes } from 'vue'

const props = defineProps<RadioGroupItemProps & { class?: HTMLAttributes['class'] }>()

const delegatedProps = computed(() => {
  const { class: _, ...delegated } = props

  return delegated
})

const forwarded = useForwardPropsEmits(delegatedProps)
</script>

<template>
  <RadioGroupItem
    data-slot="radio"
    v-bind="forwarded"
    :class="
      cn(
        'peer border-input data-[state=checked]:border-primary focus-visible:border-ring focus-visible:ring-ring/50 aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive size-4 shrink-0 rounded-full border shadow-xs transition-shadow outline-none focus-visible:ring-[3px] disabled:cursor-not-allowed disabled:opacity-50',
        props.class,
      )
    "
  >
    <RadioGroupIndicator
      data-slot="radio-indicator"
      class="flex items-center justify-center"
    >
      <slot>
        <Circle class="text-primary size-2.5 fill-current" />
      </slot>
    </RadioGroupIndicator>
  </RadioGroupItem>
</template>
