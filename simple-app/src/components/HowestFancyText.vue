<template>
    <p>{{ text }}</p>
</template>

<script>
export default {
    props: {
        text: {
            type: String,
        }
    },
};
</script>

<style scoped>
p {
    color: rgb(45, 109, 206);
    font-size: 1rem;
}
</style>