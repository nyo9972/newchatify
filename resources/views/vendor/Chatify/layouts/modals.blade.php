{{-- ---------------------- Image modal box ---------------------- --}}
<div id="imageModalBox" class="imageModal">
    <span class="imageModal-close">&times;</span>
    <img class="imageModal-content" id="imageModalBoxSrc" src="">
  </div>

  {{-- ---------------------- Delete Modal ---------------------- --}}
  <div class="app-modal" data-name="delete">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="delete" data-modal='0'>
              <div class="app-modal-header">Tem certeza que deseja deletar isto?</div>
              <div class="app-modal-body">Você não pode desfazer esta ação</div>
              <div class="app-modal-footer">
                  <a href="javascript:void(0)" class="app-btn cancel">Cancelar</a>
                  <a href="javascript:void(0)" class="app-btn a-btn-danger delete">Deletar</a>
              </div>
          </div>
      </div>
  </div>
  {{-- ---------------------- Alert Modal ---------------------- --}}
  <div class="app-modal" data-name="alert">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="alert" data-modal='0'>
              <div class="app-modal-header"></div>
              <div class="app-modal-body"></div>
              <div class="app-modal-footer">
                  <a href="javascript:void(0)" class="app-btn cancel">Cancelar</a>
              </div>
          </div>
      </div>
  </div>
  {{-- ---------------------- Settings Modal ---------------------- --}}
  <div class="app-modal" data-name="settings">
      <div class="app-modal-container">
          <div class="app-modal-card" data-name="settings" data-modal='0'>
              <form id="update-settings" action="{{ route('avatar.update') }}" enctype="multipart/form-data" method="POST">
                  {{ csrf_field() }}
                  <div class="app-modal-header">Atualize as configurações do seu perfil</div>
                  <div class="app-modal-body">
                      {{-- Udate profile avatar --}}
                      <div class="avatar av-l upload-avatar-preview"
                      style="background-image: url('{{ ('https://weechat.s3.sa-east-1.amazonaws.com/weechat/'.config('chatify.user_avatar.folder').'/'.Auth::user()->avatar) }}')"
                      ></div>
                      <p class="upload-avatar-details"></p>
                      <label class="app-btn a-btn-primary update">
                          Carregar foto de perfil
                          <input class="upload-avatar" accept="image/*" name="avatar" type="file" style="display: none" />
                      </label>
                      {{-- Dark/Light Mode  --}}
                      <p class="divider"></p>
                      <p class="app-modal-header">Dark Mode <span class="
                        {{ Auth::user()->dark_mode > 0 ? 'fas' : 'far' }} fa-moon dark-mode-switch"
                         data-mode="{{ Auth::user()->dark_mode > 0 ? 1 : 0 }}"></span></p>
                      {{-- change messenger color  --}}
                      <p class="divider"></p>
                      <p class="app-modal-header">Change {{ config('chatify.name') }} Color</p>
                      <div class="update-messengerColor">
                            <span class="messengerColor-1 color-btn"></span>
                            <span class="messengerColor-2 color-btn"></span>
                            <span class="messengerColor-3 color-btn"></span>
                            <span class="messengerColor-4 color-btn"></span>
                            <span class="messengerColor-5 color-btn"></span>
                            <br/>
                            <span class="messengerColor-6 color-btn"></span>
                            <span class="messengerColor-7 color-btn"></span>
                            <span class="messengerColor-8 color-btn"></span>
                            <span class="messengerColor-9 color-btn"></span>
                            <span class="messengerColor-10 color-btn"></span>
                      </div>
                  </div>
                  <div class="app-modal-footer">
                      <a href="javascript:void(0)" class="app-btn cancel">Cancelar</a>
                      <input type="submit" class="app-btn a-btn-success update" value="Atualizar" />
                  </div>
              </form>
          </div>
      </div>
  </div>
