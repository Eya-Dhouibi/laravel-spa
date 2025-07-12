<div class="relative">
    <button {{ $attributes->merge(['class' => 'dropdown-toggle']) }}>
        {{ $slot }}
    </button>
    <div class="dropdown-menu hidden">
        <!-- dropdown items -->
    </div>
</div>
