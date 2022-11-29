<template>
  <div>
    <Head title="Editar Nota" />
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/notas">Notas</Link>
      <span class="text-indigo-400 font-medium">/</span> Editar
    </h1>
    <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="store">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.nota" :error="form.errors.nota" class="pb-8 pr-6 w-full lg:w-1/2" label="Nota" />
          <select-input v-model="form.id_aluno" :error="form.errors.id_aluno" class="pb-8 pr-6 w-full lg:w-1/2" label="Aluno">
            <option :value="null" />
            <option v-for="aluno in alunos" :key="aluno.id" :value="aluno.id">{{ aluno.nome }}</option>
          </select-input>
        </div>
        <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
          <button v-if="!nota.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Excluir Nota</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Atualizar Nota</loading-button>
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
import SelectInput from '@/Shared/SelectInput'

export default {
  components: {
    Head,
    Link,
    LoadingButton,
    TextInput,
    SelectInput
  },
  layout: Layout,
  props: {},

  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        nota: this.nota.nota,
        id_aluno: this.nota.id_aluno
       
      }),
    }
  },
  methods: {
    update() {
      this.form.put(`/notas/${this.nota.id}/editar`)
    },
    destroy() {
      if (confirm('Você tem certeza que deseja excluir esta nota?')) {
        this.$inertia.delete(`/notas/${this.nota.id}`)
      }
    },
  },

  props: {
    alunos: Object,
    nota: Object
  }
}
</script>
