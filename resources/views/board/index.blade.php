@include('template.header')
<div class="testBoardMainInner">
    <table class="testBoard">
        <thead class="testBoardHead">
            <th class="testBoradHeadIdx">인덱스</th>
            <th class="testBoradHeadTitle">제목</th>
            <th class="testBoradHeadHit">조회수</th>
            <th class="testBoardHeadCreatedAt">제작일자</th>
            <th class="testBoardHeadUpdatedAt">수정일자</th>
            <th class="testBoradHeadEdit">수정</th>
            <th class="testBoradHeadDelete">삭제</th>
        </thead>
        <tbody class="testBoardBody">
            @foreach ($boardList as $board)
                <tr>
                    <td class="testBoradBodyIdx">{{ $board->id }}</td>
                    <td class="testBoradBodyTitle">{{ $board->title }}</td>
                    <td class="testBoradBodyHit">{{ $board->hit }}</td>
                    <td class="testBoardBodyCreatedAt">{{ $board->created_at }}</td>
                    <td class="testBoardBodyUpdatedAt">{{ $board->updated_at == $board->created_at ? '-' : $board->updated_at }}</td>
                    <td class="testBoradBodyEdit"><a href="{{ route('board.edit', $board->id) }}">수정</a></td>
                    <td class="testBoradBodyDelete">삭제</td>
                </tr>     
            @endforeach
        </tbody>
    </table>
    <button type="submit" id="testBoardCreate">등록</button>
</div>

<script>
    document.getElementById('testBoardCreate').addEventListener('click', function() {
        location.href = "{{ route('board.create') }}";
    });
</script>
@include('template.footer')
