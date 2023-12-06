<a href="{{ get_post_permalink() }}" class="default-card block max-w-md p-6 bg-white border border-gray-200 
    rounded-lg shadow hover:bg-bg-orange-400 dark:bg-orange-500">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
        {{ the_title() }}
    </h5>
    <p class="default-card__content font-normal text-white">
        {{ the_content() }}
    </p>
</a>