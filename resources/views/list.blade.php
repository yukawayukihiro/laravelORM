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