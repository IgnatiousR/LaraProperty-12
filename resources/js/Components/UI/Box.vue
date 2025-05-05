<template>
    <div class="border border-gray-200 dark:border-gray-700 rounded-md shadow-md p-4">
        <div class="text-gray-500 font-medium mb-1">
            <slot name="header"/>
        </div>
        <slot></slot>
    </div>
</template>
