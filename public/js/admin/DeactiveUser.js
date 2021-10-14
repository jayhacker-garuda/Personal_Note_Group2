$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF': $('meta[name="csrf-token"]').attr('content')
        }
    });


    FetchDeactivatedUsers()

    setInterval(() => {
        FetchDeactivatedUsers()
    }, 15000);
    function FetchDeactivatedUsers() {
        $.ajax({
            type: "GET",
            url: "/admin/fetch-deactivated/users",
            dataType: "json",
            success: function (res) {

                // console.log(res);
                // console.log($('#notActive'));

                $('#notActive').html("");
                $.each(res.D_users, function (key, deactivate) {

                    // console.log(deactivate);

                    $('#notActive').append(`<tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">${deactivate.name}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">${deactivate.deleted_at}</td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            <span>
                                <button class="activate_user p-2 mx-2 rounded-md bg-green-400" type="button" value="${deactivate.id}">
                                    Activate
                                </button>
                            </span>
                        </td>
                    </tr>`)
                });
            }
        });
    }

    $(document).on('click', '.activate_user', (e) => {
        e.preventDefault();
        let user_id = e.target.value;

        $.ajax({
            type: "POST",
            url: "/admin/activate/user/" + user_id,
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {

                // alert(response.message);
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

});
