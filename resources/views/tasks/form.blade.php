@if (Auth::id() == $user->id)
    <div class="mt-4">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div>
                <table class="table">
                    <tr>
                        <th>content</th>
                        <th>status</th>
                        <th> </th>
                    </tr>
                    <tr>
                        <td>
                            <input name="content" class="input input-bordered"/>
                        </td>
                        <td>
                            <input name="status" class="input input-bordered"/>
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary btn-block normal-case">Note</button>
                        </td>
                    </tr>
                </table>
            </div>
        
        </form>
    </div>
@endif