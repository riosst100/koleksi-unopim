<x-admin::layouts>
    <x-slot:title>
        {{ trans('product_database::app.index.title') }}
    </x-slot>

    <div class="max-w-[1240px]">
        <div class="grid gap-1.5 mb-6">
            <p class="text-xl font-bold !leading-normal text-zinc-800 dark:text-slate-50">
                {{ trans('product_database::app.index.title') }}
            </p>

            <p class="max-w-[720px] text-sm !leading-normal text-zinc-600 dark:text-slate-300">
                {{ trans('product_database::app.index.description') }}
            </p>
        </div>

        <div class="rounded-2xl border border-zinc-200 bg-white p-6 shadow-sm dark:border-slate-800 dark:bg-slate-900">
            <p class="text-base font-semibold text-zinc-800 dark:text-slate-100">
                {{ trans('product_database::app.index.empty-title') }}
            </p>

            <p class="mt-2 text-sm leading-6 text-zinc-600 dark:text-slate-300">
                {{ trans('product_database::app.index.empty-description') }}
            </p>
        </div>
    </div>
</x-admin::layouts>
