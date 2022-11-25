<template>
  <div>
    <Head title="Editar Alunos" />
    <h1 class="mb-8 text-3xl font-bold">
      <Link class="text-indigo-400 hover:text-indigo-600" href="/alunos">Alunos</Link>
      <span class="text-indigo-400 font-medium">/</span> Editar
    </h1>
    <div class="max-w-3xl bg-white rounded-md shadow overflow-hidden">
      <form @submit.prevent="update">
        <div class="flex flex-wrap -mb-8 -mr-6 p-8">
          <text-input v-model="form.nome" :error="form.errors.nome" class="pb-8 pr-6 w-full lg:w-1/2" label="Nome do Aluno" />
          <select-input v-model="form.id_turma" :error="form.errors.id_turma" class="pb-8 pr-6 w-full lg:w-1/2" label="Turma">
            <option :value="null" />
            <option v-for="turma in turmas" :key="turma.id" :value="turma.id">{{ turma.nome }}</option>
          </select-input>
        </div>
        <div class="flex items-center justify-end px-8 py-4 bg-gray-50 border-t border-gray-100">
          <button v-if="!aluno.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">Excluir Aluno</button>
          <loading-button :loading="form.processing" class="btn-indigo ml-auto" type="submit">Atualizar Aluno</loading-button>
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
        nome: this.aluno.nome,
        id_turma: this.aluno.id_turma
       
      }),
    }
  },
  methods: {
    update() {
      this.form.put(`/alunos/${this.aluno.id}/editar`)
    },
    destroy() {
      if (confirm('Você tem certeza que deseja excluir o aluno?')) {
        this.$inertia.delete(`/alunos/${this.aluno.id}`)
      }
    },
    
  },

  props: {
    turmas: Object,
    aluno: Object
  }
}
</script>
