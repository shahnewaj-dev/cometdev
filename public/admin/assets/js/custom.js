(function ($){
    $(document).ready(function (){

        CKEDITOR.replace('content');

        $('#tag_select').select2();


        function showAll(){
            $.ajax({
                url : '/category/show',
                success:function (data){
                    $('#all_category').html(data);

                }
            });

        }
        showAll();



        $('.logout-cls').click(function (e){
            e.preventDefault();

            $('#logout_id').submit();
        });

        $('#category-modal-btn').click(function (e){
            e.preventDefault();

            $('#category-modal-show').modal('show');
        });

        $(document).on('click','#active',function (){

            let id = $(this).attr('status_active_id')

            $.ajax({
                url:'/category/status/active/'+id,
                success:function (data){
                    ('.msg').html('status update successful');
                    showAll();
                }

            })
        });

        $(document).on('click','#inactive',function (){

            let id = $(this).attr('status_inactive_id')

            $.ajax({
                url:'/category/status/inactive/'+id,
                success:function (data){
                    ('.msg').html('status update successful');
                }

            });
            showAll();
        });


        $(document).on('click','#delete_btn',function (e){
            e.preventDefault();
            let id = $(this).attr('delete_id');
            $.ajax({
                url:'/category/delete/'+id,
                success:function (data){
                    $('.msg').html('data delete successfully');

                }
            })
            showAll();

        });
        $(document).on('click','#category_edit_btn',function (e){
            e.preventDefault();
            let id = $(this).attr('edit_id');

            $.ajax({
                url:'/category/edit/'+id,
                success:function (data){
                    $('#category-modal-edit').modal('show');
                    $('#update_form input[name="name"]').val(data.name);
                    $('#update_form input[name="update_id"]').val(data.id);
                }
            })

        });
        $(document).on('submit','form#update_form',function (e){
            e.preventDefault();

            $.ajax({
                url:'/category/update',
                method:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                success:function (data){
                    $('.msg').html('data update successfully');
                    $('#category-modal-edit').modal('hide');
                    showAll();
                }
            })
        });

        $('#photo_icon').change(function (e){
            let img_url = URL.createObjectURL(e.target.files[0]);
            $('#image_loader').attr('src',img_url);
        });

        $('#format').change(function (){
            let post_format = $(this).val();
            if (post_format=='Featured Image'){
                $('.img').show();
            }else{
                $('.img').hide();
            }
            if (post_format=='Gallery Image'){
                $('.gal').show();
            }else{
                $('.gal').hide();
            }
            if (post_format=='Video'){
                $('.video').show();
            }else{
                $('.video').hide();
            }
            if (post_format=='Audio'){
                $('.audio').show();
            }else{
                $('.audio').hide();
            }
        });
        $('#photo_icon_g').change(function (e){
            let img_gal = '';
            for(let i=0;i<e.target.files.length;i++){
                let file_url = URL.createObjectURL(e.target.files[i]);

                img_gal += '<img src="'+file_url+'" alt="">';
            }
            $('.img-gal').html(img_gal);

        });



    });
})(jQuery)
