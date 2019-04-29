            
        <div id="login_modal_background" class="modal delete_modal" >
            <div class="login_modal_wrapper">
                <div class="login_modal_container">
                    <h4>Are you sure you want to delete this topic?</h4>
                            <div class="form_actions delete_modal_actions">
                            <div class="rectangle_fill_button login_modal_cancel">Cancel</div>
                            <button class="cta_button modal_delete_button">Yes, delete</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Login modal container -->
            </div> <!-- Login modal wrapper -->
        </div> <!-- Login modal background -->



        <div id="login_modal_background" class="modal copy_modal">
            <div class="login_modal_wrapper">
                <div class="login_modal_container">
                    <h4>Select a class to copy this topic to</h4>
                    <div class="class_table_container">
                            <div class="class_table_header">
                                <div class="class_table_row">
                                    <div class="class_table_col1"><p>Class title</p></div>
                                    <div class="class_table_col2"><p>Class teacher</p></div>
                                    <div class="class_table_col3"><p>Year-year</p></div>
                                </div> <!-- Class table row -->
                            </div> <!-- Class table header -->

                            <div class="class_table_body">

                               <a class="class_table_row" href="#">
            <div class="class_table_col1"><p>Year 11, Set B2 ICT (IB211)</p></div>
            <div class="class_table_col2"><p>Mrs Robinson</p></div>
            <div class="class_table_col3"><p>2018-2019</p></div>
        </a> <!-- Class table row -->

                                <a class="class_table_row" href="#">
            <div class="class_table_col1"><p>Year 10, Set B2 ICT (IB210)</p></div>
            <div class="class_table_col2"><p>Ms Jackson</p></div>
            <div class="class_table_col3"><p>2018-2019</p></div>
        </a> <!-- Class table row -->

                            </div> <!-- Class table body -->
                        </div> <!-- Class table container -->
                            <div class="form_actions copy_modal_actions">
                            <div class="rectangle_fill_button login_modal_cancel">Cancel</div>
                            <button class="cta_button modal_confirm_button">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Login modal container -->
            </div> <!-- Login modal wrapper -->
        </div> <!-- Login modal background -->
        


        <div id="login_modal_background" class="modal create_topic_modal" >
            <div class="login_modal_wrapper">
                <div class="login_modal_container">
                    <h4>Create a new topic</h4>
                            <div class="login_form">
                            <form>
                            <div class="form_action_group">
                                <label>Topic title</label>
                                <input type="text" name="topic_header"/>
                            </div>
                            <div class="form_action_group">
                                <label>Topic introduction</label>
                                <textarea></textarea>
                            </div>
                            <div class="form_actions login_modal_actions">
                            <div class="rectangle_fill_button login_modal_cancel">Cancel</div>
                            <button class="cta_button modal_delete_button">Create</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Login modal container -->
            </div> <!-- Login modal wrapper -->
        </div> <!-- Login modal background -->

        <div id="login_modal_background" class="modal create_reminder_modal" >
            <div class="login_modal_wrapper">
                <div class="login_modal_container">
                    <h4>Create a new topic</h4>
                            <div class="login_form">
                            <form>
                            <div class="form_action_group">
                                <label>Reminder title</label>
                                <input type="text" name="topic_header"/>
                            </div>
                            <div class="form_action_group">
                                <label>Reminder description</label>
                                <textarea></textarea>
                            </div>
                            <div class="form_action_group">
                                <label>Reminder date</label>
                                <input type="date"></input>
                            </div>
                            <div class="form_actions login_modal_actions">
                            <div class="rectangle_fill_button login_modal_cancel">Cancel</div>
                            <button class="cta_button modal_delete_button">Create</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Login modal container -->
            </div> <!-- Login modal wrapper -->
        </div> <!-- Login modal background -->

        <div id="login_modal_background" class="modal create_section_modal" >
            <div class="login_modal_wrapper">
                <div class="login_modal_container">
                    <h4>Create a new topic</h4>
                            <div class="login_form">
                            <form>
                            <div class="form_action_group">
                                <label>Sub-section title</label>
                                <input type="text" name="topic_header"/>
                            </div>
                            <div class="form_action_group">
                                <label>Sub-title introduction</label>
                                <textarea></textarea>
                            </div>
                            <div class="form_actions login_modal_actions">
                            <div class="rectangle_fill_button login_modal_cancel">Cancel</div>
                            <button class="cta_button modal_delete_button">Create</button>
                            </div>
                        </form>
                    </div>
                </div> <!-- Login modal container -->
            </div> <!-- Login modal wrapper -->
        </div> <!-- Login modal background -->
        
        <div class="snackbar_style_wrapper negative_snackbox delete_topic">
            <div class="snackbar_container">
                <p class="close_snackbar"><i class="fas fa-times"></i></p>
                <p>Your topic was deleted.</p>
            </div>
        </div>
                
            </div>
   
            <div class="snackbar_style_wrapper positive_snackbar new_section_snackbar">
            <div class="snackbar_container">
                <p class="close_snackbar"><i class="fas fa-times"></i></p>
                <p>New section added.</p>
            </div>
        </div>

            <div class="snackbar_style_wrapper positive_snackbar new_topic_snackbar">
            <div class="snackbar_container">
                <p class="close_snackbar"><i class="fas fa-times"></i></p>
                <p>New topic created</p>
            </div>
            </div>

            <div class="snackbar_style_wrapper positive_snackbar new_reminder_snackbar">
            <div class="snackbar_container">
                <p class="close_snackbar"><i class="fas fa-times"></i></p>
                <p>Created</p>
            </div>
            </div>

            <div class="snackbar_style_wrapper positive_snackbar topic_copied_snackbar">
            <div class="snackbar_container">
                <p class="close_snackbar"><i class="fas fa-times"></i></p>
                <p>Topic copied</p>
            </div>
            </div>

            <div class="snackbar_style_wrapper positive_snackbar topic_saved_snackbar">
                <div class="snackbar_container">
                <p class="close_snackbar"><i class="fas fa-times"></i></p>
                <p>Changes saved</p>
            </div>
            </div>
            

        </div> <!-- GLOBAL BODY WRAPPER -->

            

    </div> <!-- CURRICULR WRAPPER -->


            


    <!-- INCLUDING THE JAVASCRIPT FILES -->   
<script src="../js/third_party_js/summernote.lite.js"></script>

<!-- Including custom JavaScript file -->
<script src="../js/main.js"></script>
</body>
</html>