<div>
    <div>
        <form action="/user" action="POST">
            @csrf
            <label>名前</label>
            <input type="text" name="name"><br>
            <label>メールアドレス</label>
            <input type="text" name="email"><br>
            <label>コメント</label>
            <textarea name="comment"></textarea><br>
            <input type="submit" value="登録">
        </form>
    </div>
</div>
<table>
    <tr>
        <th>名前</th><th>メールアドレス</th><th>コメント</th>
    </tr>
    @foreach ($samples as $sample)
    <tr>
        <td>{{$sample->name}}</td><td>{{$sample->email}}</td><td>{{$sample->comment}}</td>
    </tr>
    @endforeach
</table>