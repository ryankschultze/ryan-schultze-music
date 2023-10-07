<template>
    <div>
        <!-- Navbar -->
        <nav class="bg-blue-600 text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo / Toggle Button -->
                <button @click="toggleSidebar" class="text-xl font-bold focus:outline-none">
                    Logo
                </button>
            </div>
        </nav>

        <!-- Sidebar Menu -->
        <div :class="{ 'w-64': sidebarOpen, 'w-0': !sidebarOpen }" class="fixed left-0 h-full bg-blue-600 text-white shadow-lg overflow-x-hidden transition-width duration-300">
            <div class="p-4">
                <a href="#" class="block mb-4 hover:text-blue-400">Home</a>
                <a href="#" class="block mb-4 hover:text-blue-400">About</a>
                <a href="#" class="block mb-4 hover:text-blue-400">Services</a>
                <a href="#" class="block mb-4 hover:text-blue-400">Contact</a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            sidebarOpen: false
        };
    },
    methods: {
        toggleSidebar() {
            this.sidebarOpen = !this.sidebarOpen;
        }
    }
}
</script>
