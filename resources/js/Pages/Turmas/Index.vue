<template>
  <div>
    <Head title="Turmas" />
    <h1 class="mb-8 text-3xl font-bold">Turmas</h1>
    <div class="flex items-center justify-between mb-6">
     <search-filter  class="mr-4 w-full max-w-md">
        <label class="block text-gray-700">Selecione:</label>
        <select class="form-select mt-1 w-full">
          <option :value="null" />
          <option value="with">With Trashed</option>
          <option value="only">Only Trashed</option>
        </select>
      </search-filter>
      <Link class="btn-indigo" href="/turmas/cadastrar-nova">
        <span>Nova</span>
        <span class="hidden md:inline">&nbsp;Turma</span>
      </Link>
    </div>
    <div class="bg-white rounded-md shadow overflow-x-auto">
      <table class="w-full whitespace-nowrap">
        <thead>
          <tr class="text-left font-bold">
            <th class="pb-4 pt-6 px-6">Nome da Turma</th>
            <th class="pb-4 pt-6 px-6" colspan="4">Quantidade de Alunos</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="turma in turmas" :key="turma.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
            <td class="border-t">
              <Link class="flex items-center px-6 py-4 focus:text-indigo-500" :href="`/turmas/${turma.id}/editar`">
              {{ turma.nome }}
                <icon name="trash" class="flex-shrink-0 ml-2 w-3 h-3 fill-gray-400" />
              </Link>
            </td>
            <td class="border-t">
              <Link class="flex items-center px-6 py-4"  tabindex="-1" :href="`/turmas/${turma.id}/editar`">
                <div>
                  {{ turma.alunos.length }}
                </div>
              </Link>
            </td>
          
          </tr>
          <tr v-if="turmas.length == 0">
            <td class="px-6 py-4 border-t" colspan="4">Nenhuma turma encontrada.</td>
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
    turmas: Object
  }
 
  
}

</script>
