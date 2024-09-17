<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>
<body>
    @extends('layouts.navbar')
    @extends('layouts.footer')
    <!-- Layout -->
    <div class="h-screen max-w-5xl px-2 py-3 mx-auto mt-32 tracking-wide md:px-4 md:mt-44">
    <!-- Title -->
    <div class="flex justify-center text-3xl">Frequently Asked Questions</div>
    <!-- End Title -->

    <!-- Accordion -->
    <div class="grid gap-3 py-8 text-lg leading-6 text-gray-800 md:gap-8 md:grid-cols-2">
        <div class="space-y-3">
        <!-- 1 -->
        <div x-data="accordion(1)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">What is x-data ?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Declare a new Alpine component and its data for a block of HTML </div>
            </div>
        </div>
        <!-- End 1 -->

        <!-- 2 -->
        <div x-data="accordion(2)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">What is x-bind ?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Dynamically set HTML attributes on an element.
            </div>
            </div>
        </div>
        <!-- End 2 -->
        </div>

        <div class="space-y-3">
        <!-- 3 -->
        <div x-data="accordion(3)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">What is $store ?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Access a global store registered using Alpine.store(...)
            </div>
            </div>
        </div>
        <!-- End 3 -->

        <!-- 4 -->
        <div x-data="accordion(4)" class="relative transition-all duration-700 border rounded-xl hover:shadow-2xl">
            <div @click="handleClick()" class="w-full p-4 text-left cursor-pointer">
            <div class="flex items-center justify-between">
                <span class="tracking-wide">What is x-on ?</span>
                <span :class="handleRotate()" class="transition-transform duration-500 transform fill-current ">
                <svg class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                </svg>
                </span>
            </div>
            </div>

            <div x-ref="tab" :style="handleToggle()" class="relative overflow-hidden transition-all duration-700 max-h-0">
            <div class="px-6 pb-4 text-gray-600">
                Listen for browser events on an element
            </div>
            </div>
        </div>
        <!-- End 4 -->
        </div>
    </div>
    <!-- End Accordion -->
    </div>
    <!-- End Layout -->

    <script>
        // Faq
        document.addEventListener("alpine:init", () => {
        Alpine.store("accordion", {
            tab: 0
        });

        Alpine.data("accordion", (idx) => ({
            init() {
            this.idx = idx;
            },
            idx: -1,
            handleClick() {
            this.$store.accordion.tab =
                this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
            return this.$store.accordion.tab === this.idx ? "-rotate-180" : "";
            },
            handleToggle() {
            return this.$store.accordion.tab === this.idx
                ? `max-height: ${this.$refs.tab.scrollHeight}px`
                : "";
            }
        }));
        });
        //  end faq

        </script>
</body>
</html>