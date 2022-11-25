<template>
  <div>
    <Head title="Cadastrar Turmas" />
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/turmas">Turmas</Link>
      <span class="text-indigo-400 font-medium">/</span> Cadastrar Nova
    </h1>
    <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="store">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.nome" :error="form.errors.nome" class="pb-8 pr-6 w-full lg:w-1/2" label="Nome da Turma" />
        </div>
        <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
          <loading-button :loading="form.processing" class="btn-indigo" type="submit">Cadastrar Turma</loading-button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Layout from '@/Shared/Layout'
import TextInput from '@/Shared/TextInput'
import LoadingButton from '@/Shared/LoadingButton'

export default {
  components: {
    Head,
    Link,
    LoadingButton,
    TextInput,
  },
  layout: Layout,
  props: {},

  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        nome: '',
       
      }),
    }
  },
  methods: {
    store() {
      this.form.post('/turmas')
    },
  },
}
</script>
