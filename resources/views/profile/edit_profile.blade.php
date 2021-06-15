<div id="EditProfileModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('profile.edit_profile.edit_profile') }}</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            <form method="POST" id="editProfileForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="alert alert-danger d-none" id="editProfileValidationErrorsBox"></div>
                    <input type="hidden" name="user_id" id="pfUserId">
                    <input type="hidden" name="is_active" value="1">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>{{ __('profile.edit_profile.name') }}:</label><span class="required">*</span>
                            <input type="text" name="name" id="pfName" class="form-control" required autofocus tabindex="1">
                        </div>
                        <div class="form-group col-sm-6 d-flex">
                            <div class="col-sm-4 col-md-6 pl-0 form-group">
                                <label>{{ __('profile.edit_profile.profile_image') }}:</label>
                                <br>
                                <label
                                        class="image__file-upload btn btn-primary text-white"
                                        tabindex="2"> {{ __('profile.edit_profile.choose') }}
                                    <input type="file" name="photo" id="pfImage" class="d-none" >
                                </label>
                            </div>
                            <div class="col-sm-3 preview-image-video-container float-right mt-1">
                                <img id='edit_preview_photo' class="img-thumbnail user-img user-profile-img profilePicture"
                                     src="{{ \Illuminate\Support\Facades\Auth::user()->avatar() }}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>{{ __('profile.edit_profile.email') }}:</label><span class="required">*</span>
                            <input type="text" name="email" id="pfEmail" class="form-control" required tabindex="3">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary" id="btnPrEditSave" data-loading-text="<span class='spinner-border spinner-border-sm'></span> Processing..." tabindex="5">
                            {{ __('profile.edit_profile.save') }}</button>
                        <button type="button" class="btn btn-light ml-1 edit-cancel-margin margin-left-5"
                                data-dismiss="modal">{{ __('profile.edit_profile.cancel') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

