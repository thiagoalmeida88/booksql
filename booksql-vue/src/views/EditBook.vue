<template>
  <div class="create container mt-12 bg-white rounded-t-lg overflow-hidden border-t border-l border-r border-gray-400 p-4 flex p-8">
    <form class="w-full max-w-full" action="#" method="POST" @submit.prevent="editBook">

    <div v-if="errors.length" class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4 mb-6" role="alert">
      <p class="mb-2"><b>Atention!</b> Please, correct the errors below:</p>
      <ul class="px-8">
        <li class="font-bold list-disc" v-for="error in errors" v-bind:key="error">{{ error }}</li>
      </ul>
    </div>

      <h1 class="mb-8">Edit Book</h1>  
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="title">        
            Title
          </label>
          <input class="appearance-none block w-full text-gray-700 border rounded border-black
          py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="title" name="title" type="text"
          v-model="title" placeholder="Title of book">
          <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> border-red-500-->
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="author">        
            Author
          </label>
          <input class="appearance-none block w-full text-gray-700 border rounded border-black
          py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="author" name="author" type="text" 
          v-model="author" placeholder="Author">
        </div>
        <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">        
            Image
          </label>
          <input class="appearance-none block w-full text-gray-700 border rounded border-black
          py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="image" name="image" type="text"
          v-model="image" placeholder="Image">
        </div>
        <div class="w-full md:w-1/1 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">        
            Description
          </label>
          <textarea cols="30" rows="10" class="appearance-none block w-full text-gray-700 border rounded border-black
          py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="description" name="description" type="text"
          v-model="description" placeholder="Description">
          </textarea>
        </div>
        <div class="w-full md:w-1/1 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="link">        
            Link
          </label>
          <input class="appearance-none block w-full text-gray-700 border rounded border-black
          py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="link" name="link" type="text" 
          v-model="link" placeholder="link">
        </div>        
      </div>
      <div class="w-full mb-6">
        <div class="md:w-1/3"></div>
          <label class="custom-label flex">
            <div class="bg-white shadow w-6 h-6 p-1 flex justify-center items-center mr-2">
              <input type="checkbox" class="hidden" name="featured" v-model="featured">
              <svg class="hidden w-4 h-4 text-green-600 pointer-events-none" viewBox="0 0 172 172">
                <g fill="none" stroke-width="none" stroke-miterlimit="10"
                 font-family="none" font-weight="none" font-size="none" 
                 text-anchor="none" style="mix-blend-mode:normal">
                 <path d="M0 172V0h172v172z"/><path d="M145.433 37.933L64.5 
                 118.8658 33.7337 88.0996l-10.134 10.1341L64.5 139.1341l91.067-91.067z" 
                 fill="currentColor" stroke-width="1"/></g></svg>
            </div>
            <span class="select-none" for="featured">Featured</span>
          </label>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">    
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="category">
            Category
          </label>
          <div class="relative">
            <ApolloQuery :query="require('@/graphql/queries/Categories.gql')">    
                <template slot-scope="{ result: { data, loading }, isLoading }">      
                    <div v-if="isLoading">Loading...</div>                    
                    <select v-else v-model="category" class="block appearance-none
                     w-full bg-white border border-gray-400 hover:border-gray-500 px-4 
                     py-2 pr-8 rounded shadow leading-tight focus:outline-none 
                     focus:shadow-outline text-gray-700" id="category">
                      <option value="">Selecione</option>
                        <option v-for="category of data.categories" :key="category.id" :value="category.id">                        
                            {{ category.name }}
                        </option>
                    </select>
                </template>
            </ApolloQuery>   
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>                     
          </div>
        </div>    
      </div>  
      <div class="form-group py-4">          
          <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Update book
          </button>
      </div>
    </form>
  </div>
    <!-- <div class="create">
        <h1>Edit Book</h1>
        <form action="#" method="POST" @submit.prevent="editBook">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" v-model="title">
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" v-model="author">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" name="image" id="image" v-model="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"
                v-model="description"></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" v-model="link">
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="featured" v-model="featured">Featured</label>                
            </div>
            <div class="form-group">
                <ApolloQuery :query="require('@/graphql/queries/Categories.gql')">    
                    <template slot-scope="{ result: { data, loading }, isLoading }">      
                        <div v-if="isLoading">Loading...</div>
                        <select v-else v-model="category">
                            <option v-for="category of data.categories" :key="category.id" :value="category.id">                        
                                {{ category.name }}
                            </option>
                        </select>
                    </template>
                </ApolloQuery>                
            </div>

            <div class="form-group">
                <button type="submit">Update book</button>
            </div>
        </form>        
    </div> -->
</template>

<script>

import updateBook from '@/graphql/mutations/UpdateBook.gql'
import book from '@/graphql/queries/Book.gql'

export default {

    data() {      
        return {   
            errors: [],       
            title: '',
            author: '', 
            image: '',
            description: '',
            link: '',
            featured: false,
            category: '',
            book: null
        }
    },
    // Apollo-specific options
    apollo: {
    // Advanced query with parameters
    // The 'variables' method is watched by vue
    book: {
        query: book,
        // Reactive parameters
        variables () {
            if (this.$route && this.$route.params) {
                return {
                    id: this.$route.params.id
                }   
            }
        },
        // Optional result hook
        result ({ data }) {          
            this.title = data.book.title
            this.author = data.book.author
            this.image = data.book.image
            this.description = data.book.description
            this.link = data.book.link
            this.featured = data.book.featured
            this.category = data.book.category.id            
        },
      },  
    },
    methods: {        
        editBook(e) {            
          e.preventDefault();          
          this.errors = [];
          
          if (!this.title) this.errors.push('The title is required.');
          if (!this.author) this.errors.push('The author is required.');
          if (!this.category) this.errors.push('The category is required.');          
          
          if (this.title && this.author && this.category) {
            this.$apollo.mutate({
            // Query
            mutation: updateBook,            
            // Parameters            
            variables: {
                id: this.$route.params.id,
                title: this.title,
                author: this.author,
                image: this.image,
                link: this.link,
                description: this.description,
                featured: this.featured,
                category: this.category
              }            
            }).then((data) => {                          
                console.log(data)
                this.$router.push(`/book/${this.$route.params.id}`)
            }).catch((error) => {            
                console.error(error)                        
            })
          }
        }
    }
}
</script>

<style scoped>
    /* .form-group {
        margin-bottom: 32px;
    }
    input[type="text"] {
        padding: 10px 14px;
    }
    button {
        padding: 16px;
        background: #027BFF;
        color: white;
        border-radius: 5px;
        font-size: 16px;
    } */
    .custom-label input:checked + svg {
      display: block !important;
    }
</style>