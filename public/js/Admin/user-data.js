$(document).ready(function () {
    // console.log('ready')
    $.ajaxSetup({
        headers: {
            'X-CSRF': $('meta[name="csrf-token"]').attr('content')
        }
    });
    fetchUsers()
    setInterval(() => {
        fetchUsers();
    }, 15000);
    function fetchUsers() {
        $.ajax({
            type: "GET",
            url: "/fetch-user-data",
            dataType: "json",
            success: function (res) {
                // console.log(res.users)
                // console.log('data loaded')

                $('#UsersTable').html("");
                $.each(res.users, function (key, item) {
                    $('#UsersTable').append(`
                        <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full"
                                                src="/storage/media/${item.profile_picture}" alt="profile_pic">
                                        </div>

                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">${item.name}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">${item.user_type}</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">${item.created_at}
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden=""
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative">${item.status}</span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <button class="edit_user p-2 mx-2 rounded-md bg-blue-400" type="button" value="${item.id}">Edit</button>
                                    </span>
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <button class="deactivate_user p-2 mx-2 rounded-md bg-red-400" type="button" value="${item.id}">Deactivate</button>
                                    </span>
                                </td>
                        </tr>
                    `);
                });
            }
        });
    }

    $(document).on('click', '.deactivate_user', (e) => {
       
        e.preventDefault();
        let user_id = e.target.value;
        // console.log(e.target.value);

        $.ajax({
            type: "POST",
            url: "/admin/user/deactivate/" + user_id,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {

                // console.log("inside",response.status);
                if (response.status == 404) {
                    
                    $('#success_message').html("");
                    $('#success_message').addClass("block text-sm text-left text-white bg-red-500 h-12 flex items-center p-4 rounded-md");
                    $('#success_message').text(response.message);

                } else {

                    $('#updateForm_errList').html("");
                    $('#success_message').addClass("block text-sm text-left text-white bg-red-500 h-12 flex items-center p-4 rounded-md");
                    $('#success_message').text(response.message);
                    
                }
            }
        });


        
    });

    $(document).on('click', '.edit_user', (e) => {
        // console.log(e);
        // console.log(user_id);

        e.preventDefault();
        let user_id = e.target.value;
        // console.log($('#editUserModal')[0].classList)
        
        $('#editUserModal')[0].classList.toggle('hidden');

        $.ajax({
            type: "GET",
            url: "/admin/user/edit/" + user_id,
            success: function (response) {
                // console.log(response);

                if (response.status == 404) {

                    $('#success_message').html("");
                    $('#success_message').addClass("block text-sm text-left text-white bg-red-500 h-12 flex items-center p-4 rounded-md");
                    $('#success_message').text(response.message);

                } else {
                    
                    $('#user_name').html("");
                    $('#user_name').addClass("flex space-x-2 text-lg px-2 font-medium bg-gray-500 bg-opacity-10 text-green-500 rounded py-0.5");
                    $('#user_name').text(response.user.name);

                    $('#active_status').html("");
                    $('#active_status').addClass("flex space-x-2 text-purple-500 bg-transparent border border-solid border-purple-500 hover:bg-purple-500 hover:text-white active:bg-purple-600 font-bold uppercase text-sm px-6 py-3 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150");
                    $('#active_status').text("This User is: " + response.user.status);
                    
                    $('#edit_user_id')[0].value = response.user.id;

                    $('#edit_user_email')[0].value = response.user.email;
                    $('#edit_user_name')[0].value = response.user.name;

                    // console.log($('#edit_user_id')[0].value)
                }

            }
        });


        
    });
    
    $(document).on('click', '.close-modal-edit', () => {

        $('#editUserModal')[0].classList.toggle('hidden')


    });
    
    $(document).on('click', '.update_status', (e) => {
        e.preventDefault();
        
        let userId = $('#edit_user_id')[0].value;
        // console.log(userId);

        let data = {
            'email': $('#edit_user_email')[0].value,
            'name': $('#edit_user_name')[0].value
        }

        
        
        $.ajax({
            type: "PUT",
            url: "/admin/user/update/"+userId,
            data: data,
            dataType: "json",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {
                // console.log(response);

                if (response.status == 400) {
                    // errors
                    $('#updateForm_errList').html("")
                    $('#updateForm_errList').addClass("block text-sm text-left text-white bg-red-500 h-12 flex items-center p-4 rounded-md");
                    $.each(response.errors, function (key, err_values) {

                        $('#updateForm_errList').append(`<li>${err_values}</li>`)

                    });
                } else if (response.status == 404) {
                    
                    $('#updateForm_errList').html("");
                    $('#success_message').addClass("block text-sm text-left text-white bg-red-500 h-12 flex items-center p-4 rounded-md");
                    $('#success_message').text(response.message);
                    
                } else {
                    
                    $('#updateForm_errList').html("");
                    $('#success_message').html("");
                    $('#success_message').addClass("block text-sm text-left text-white bg-red-500 h-12 flex items-center p-4 rounded-md");
                    $('#success_message').text(response.message);
                    $('#editUserModal')[0].classList.toggle('hidden');


                }
            }
        });
        


    });
});