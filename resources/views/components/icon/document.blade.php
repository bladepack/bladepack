@props(['size', 'color', 'vIf'])

<x-bladepack::icon 
  :size="$size ?? null" 
  :color="$color ?? null"
  :v-if="$vIf ?? true"
>
  <path stroke-linecap="round" stroke-linejoin="round" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
</x-bladepack::icon>