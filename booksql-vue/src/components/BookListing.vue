<template>
    <div v-if="book"> 
        <router-link :to="`/book/${book.id}`"><img :src="`http://localhost:8000/img/${book.image}`" alt="cover image"
                    class="h-64 mb-2"></router-link>       
        <router-link :to="`/book/${book.id}`" class="text-lg font-bold text-black hover:text-gray-700 mb-1
        block">
            {{ book.title }}
        </router-link>  
        <div class="text-gray-700">{{ book.author }}</div>        
    </div>
</template>

<script>
export default {
    props: ['book']
}
</script>