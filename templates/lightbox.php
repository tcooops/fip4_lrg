<!-- https://v3.vuejs.org/examples/modal.html -->
<script type="text/x-template" id="modal-template">
      <transition name="modal">
        <div class="modal-mask">
          <div class="modal-wrapper">
            <div class="modal-container">
            <button class="modal-close-button" @click="$emit('close')">
                    X
            </button>
              <div class="modal-header">
                <slot name="header">
                  London Referees Group
                </slot>
              </div>

              <div class="modal-body">
                <slot name="body">
                  
                </slot>
              </div>

              <div class="modal-footer">
                <slot name="footer">
                 

                </slot>
              </div>
            </div>
          </div>
        </div>
      </transition>
    </script>
  