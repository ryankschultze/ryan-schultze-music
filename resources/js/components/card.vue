<template>
    <div class="card bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header Slot -->
        <div @click="toggleCollapse" class="cursor-pointer card-header bg-gray-100 p-4 border-b border-gray-200 flex justify-between items-center">
            <slot name="header"></slot>
            <!-- Icon indicating the collapse state -->
            <span :class="{'transform rotate-180': !collapsed}">▼</span>
        </div>

        <!-- Collapsible Body -->
        <div v-if="!collapsed" class="card-body p-4 transition-all">
            <!-- Default Slot for Main Content -->
            <slot></slot>
        </div>

        <!-- Footer Slot -->
        <div v-if="!collapsed && $slots.footer" class="card-footer bg-gray-100 p-4 border-t border-gray-200">
            <slot name="footer"></slot>
        </div>
    </div>
</template>

<script>
export default {
    name: "CardComponent",
    data() {
        return {
            collapsed: false
        };
    },
    methods: {
        toggleCollapse() {
            this.collapsed = !this.collapsed;
        }
    }
}
</script>
