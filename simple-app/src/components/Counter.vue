<template>
    <div id="my-counter">
        <p>Count: {{ count }}</p>
        <HowestFancyText :text="sampleText" />
        <button @click="increment">Increment</button>
    </div>
</template>

<script>
import HowestFancyText from './HowestFancyText.vue';

export default {    
    components: {
        HowestFancyText
    },
    data() {
        return {
            count: 0,
            sampleText: "I am passing this text to a custom component"
        };
    },
    methods: {
        increment() {
            this.count++;
        }
    }
};
</script>

<style scoped>
#my-counter {
    display: flex;
    flex-direction: column;
    align-items: center;
}

button {
    margin-top: 1rem;
    padding: 0.5rem 1rem;
    font-size: 1rem;
}
</style>
