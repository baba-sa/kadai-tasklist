<div class="mt-4">
    @if (isset($tasks))

        <div>
            <div>
                {{-- 投稿内容 --}}
                <table class="table ">
                    <tr>
                        <th>My Task</th>
                        <th>status</th>
                        <th>created at</th>
                        <th> </th>
                    </tr>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{!! nl2br(e($task->content)) !!}</td>
                        <td>{{ nl2br(e($task->status)) }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>
                            <form method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-error btn-sm normal-case" 
                                onclick="return confirm('Delete id = {{ $task->id }} ?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </table>
                
            </div>
        </div>

        {{-- ページネーションのリンク --}}
        {{ $tasks->links() }}
    @endif
</div>