<template>
    <div>
        <!-- Navbar -->
        <nav class="bg-blue-600 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="#" class="text-xl font-bold">Logo</a>

                <div class="relative">
                    <!-- Dropdown Toggle -->
                    <button @click="toggleDropdown" class="focus:outline-none">
                        Menu
                        <span v-if="!dropdownOpen">▼</span>
                        <span v-else>▲</span>
                    </button>

                    <!-- Dropdown Menu -->
                    <div v-if="dropdownOpen" class="absolute right-0 mt-2 w-48 bg-white text-black shadow-lg rounded border">
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Item 1</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Item 2</a>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-200">Item 3</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    data() {
        return {
            dropdownOpen: false
        };
    },
    methods: {
        toggleDropdown() {
            this.dropdownOpen = !this.dropdownOpen;
        }
    }
}
</script>
