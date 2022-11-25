<template>
  <div>
    <Head title="Alunos" />
    <h1 class="mb-8 text-3xl font-bold">Alunos</h1>
    <div class="flex items-center justify-between mb-6">
      <search-filter v-model="form.search"  class="mr-4 w-full max-w-md" @reset="reset">
        <label class="block text-gray-700">Turma:</label>
        <select v-model="form.turma" class="form-select mt-1 w-full">
          <option :value="null" />
          <option v-for="turma in turmas" :key="turma.id" :value="turma.id">{{ turma.nome }}</option>
        </select>
      </search-filter> 
      <Link class="btn-indigo" href="/alunos/cadastrar-novo">
        <span>Novo</span>
        <span class="hidden md:inline">&nbsp;Aluno</span>
      </Link>
    </div>
    <div class="bg-white rounded-md shadow overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <thead>
          <tr class="text-left font-bold">
            <th class="pb-4 pt-6 px-6">Nome do Aluno</th>
            <th class="pb-4 pt-6 px-6" colspan="4">Turma</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="aluno in alunos" :key="aluno.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
            <td class="border-t">
              <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/alunos/${aluno.id}/editar`">
              {{ aluno.nome }}
                <icon name="trash" class="flex-shrink-0 ml-2 w-3 h-3 fill-gray-400" />
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4"  tabindex="-1" :href="`/alunos/${aluno.id}/editar`">
                <div>
                  {{ aluno.turma.nome }}
                </div>
              </Link>
            </td>
          
          </tr>
          <tr v-if="alunos.length == 0">
            <td class="px-6 py-4 border-t" colspan="4">Nenhum aluno encontrado.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/inertia-vue3'
import Icon from '@/Shared/Icon'
import Layout from '@/Shared/Layout'
import SearchFilter from '@/Shared/SearchFilter'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import pickBy from 'lodash/pickBy'

export default {
  components: {
    Head,
    Icon,
    Link,
    SearchFilter,
  },
  layout: Layout,
  props: {
    // testando: String,
    alunos: Object,
    turmas: Object,
    filters: Object,
  },

  data() {
    return {
      form: {
        search: this.filters.search,
        turma: this.filters.turma
      }
    }
  },
  watch: {
    form: {
      deep: true,
      handler: throttle(function () {
        this.$inertia.get('/alunos', pickBy(this.form), { preserveState: true })
      }, 150),
    },
  },
  methods: {
    reset() {
       this.form = mapValues(this.form, () => null)
    },
  },
 
  
}

</script>
