<template>
    <Head title="Clientes" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Clientes
            </h2>
        </template>

        <div class="p-2">

            <CardContainer titulo="Busca Clientes">
                <template v-slot:conteudo>
                    <form action="">
                        <div class="row">
                            <div class="col-md-6">
                                <InputContainer id="nome" titulo="Nome" id-help="teste">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="{{id}}Help">
                                </InputContainer>
                            </div>
                            
                        </div>
                    </form>
                </template>

                <template v-slot:rodape>
                    <div class="row">
                        <div class="col-md-2">
                            <a href="" class="btn btn-primary w-100" type="button">Limpar</a>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-primary w-100" type="button">Buscar</a>
                        </div>
                    </div>
                </template>
            </CardContainer>
        </div>

        <div class="p-2">

            <CardContainer titulo="Listagem Clientes">
                <template v-slot:conteudo>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </template>

                <template v-slot:rodape>
                    <div class="row">
                        <div class="col-md-2 justify-content-end">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#adicionarCliente">
                                Adicionar
                            </button>
                        </div>
                    </div>
                </template>
            </CardContainer>

        </div>

        <ModalContainer id="adicionarCliente" titulo="Cadastrar Cliente" >
            <template v-slot:body>
                <InputContainer id="nomeCadastro" titulo="Nome" help="Informe o nome">
                    <input type="text" name="nomeCadastro" id="nomeCadastro" class="form-control">
                </InputContainer>
            </template>

            <template v-slot:footer>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="ModalContainer">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </template>
        </ModalContainer>

    </AuthenticatedLayout>
</template>

<script setup>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import InputContainer from '@/Components/InputContainer.vue';
    import CardContainer from '@/Components/CardContainer.vue';
    import ModalContainer from '@/Components/ModalContainer.vue';
</script>