<template>
    <div class="modal fade" id="postModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">{{ modalTitle }}</h5>
            <button type="button" class="close" @click="closeModal">
              <span>&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Aquí va el contenido del modal, como formularios para editar o crear posts -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" @click="closeModal">Cerrar</button>
            <button type="button" class="btn btn-primary" @click="savePost">Guardar</button>
          </div>
        </div>
      </div>
    </div>
</template>
<script>
export default {
  name: 'PostModalComponent',
  props: {
    post: Object,
    isOpen: Boolean
  },
  data() {
    return {
      modalTitle: this.post ? 'Editar Post' : 'Nuevo Post',
      // Otras variables de estado local
    };
  },
  methods: {
    closeModal() {
      this.$emit('close');
    },
    savePost() {
      // Lógica para guardar o actualizar el post
      this.$emit('save', this.post);
    }
  }
};
</script>
watch: {
    isOpen(newVal) {
      if (newVal) {
        // Resetear estado del formulario o cargar datos
      }
    }
  }
