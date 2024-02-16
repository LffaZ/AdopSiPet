@if ($paginator->hasPages())
<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center flex-column flex-wrap md:flex-row justify-between p-5 dark:bg-gray-800">
    <div class="flex justify-between flex-1 sm:hidden">
        @if ($paginator->onFirstPage())
        <!-- <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md"> -->
        <span class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 cursor-default rounded-s-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
            {!! __('pagination.previous') !!}
        </span>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.previous') !!}
        </a>
        @endif

        @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
            {!! __('pagination.next') !!}
        </a>
        @else
        <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-md">
            {!! __('pagination.next') !!}
        </span>
        @endif
    </div>

    <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
        <!-- Showing 6 - 10 of 22 -->
        <div>
            <p class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">
                {!! __('Showing') !!}
                @if ($paginator->firstItem())
                <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->firstItem() }}</span>
                {!! __('-') !!}
                <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->lastItem() }}</span>
                @else
                {{ $paginator->count() }}
                @endif
                {!! __('of') !!}
                <span class="font-semibold text-gray-900 dark:text-white">{{ $paginator->total() }}</span>
            </p>
        </div>

        <div>
            <!-- <span class="relative z-0 inline-flex shadow-sm rounded-md"> -->
            <span class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                    <span class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 cursor-default rounded-s-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" aria-hidden="true">
                        Previous
                    </span>
                </span>
                @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                    Previous
                </a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <span aria-disabled="true">
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 cursor-default leading-5">{{ $element }}</span>
                </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <span aria-current="page">
                    <span class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</span>
                </span>
                @else
                <a href="{{ $url }}" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                    {{ $page }}
                </a>
                @endif
                @endforeach
                @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" aria-label="{{ __('pagination.next') }}">
                    Next
                </a>
                @else
                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                    <!-- <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default rounded-r-md leading-5" aria-hidden="true"> -->
                    <span class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 cursor-default rounded-e-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400" aria-hidden="true">
                        Next
                    </span>
                </span>
                @endif
            </span>
        </div>
    </div>
</nav>
@endif



