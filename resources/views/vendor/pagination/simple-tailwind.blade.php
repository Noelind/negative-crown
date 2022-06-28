@if ($paginator->hasPages())
	<nav role="navigation" aria-label="Pagination Navigation" class="my-16 flex justify-between">
		{{-- Previous Page Link --}}
		@if ($paginator->onFirstPage())
			<span class="relative inline-flex items-center px-4 py-2 text-xl font-medium leading-5 text-black opacity-30 dark:text-white">
				{!! __('pagination.previous') !!}
			</span>
		@else
			<a href="{{ $paginator->previousPageUrl() }}" rel="prev"
				class="relative inline-flex items-center px-4 py-2 text-xl font-medium leading-5 text-black transition-opacity duration-300 hover:opacity-80 dark:text-white">
				{!! __('pagination.previous') !!}
			</a>
		@endif

		{{-- Next Page Link --}}
		@if ($paginator->hasMorePages())
			<a href="{{ $paginator->nextPageUrl() }}" rel="next"
				class="relative inline-flex items-center px-4 py-2 text-xl font-medium leading-5 text-black transition-opacity duration-300 hover:opacity-80 dark:text-white">
				{!! __('pagination.next') !!}
			</a>
		@else
			<span class="relative inline-flex items-center px-4 py-2 text-xl font-medium leading-5 text-black opacity-30 dark:text-white">
				{!! __('pagination.next') !!}
			</span>
		@endif
	</nav>
@endif
