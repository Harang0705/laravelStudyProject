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
            <tr>
                <td class="testBoradBodyIdx">1</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoardBodyCreatedAt">2022-09-10 12:20:20</td>
                <td class="testBoardBodyUpdatedAt">2022-09-10 14:20:20</td>
                <td class="testBoradBodyEdit">수정</td>
                <td class="testBoradBodyDelete">삭제</td>
            </tr>
            <tr>
                <td class="testBoradBodyIdx">2</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoardBodyCreatedAt">2022-09-10 12:20:20</td>
                <td class="testBoardBodyUpdatedAt">2022-09-10 14:20:20</td>
                <td class="testBoradBodyEdit">수정</td>
                <td class="testBoradBodyDelete">삭제</td>
            </tr>
            <tr>
                <td class="testBoradBodyIdx">3</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoardBodyCreatedAt">2022-09-10 12:20:20</td>
                <td class="testBoardBodyUpdatedAt">2022-09-10 14:20:20</td>
                <td class="testBoradBodyEdit">수정</td>
                <td class="testBoradBodyDelete">삭제</td>
            </tr>
            <tr>
                <td class="testBoradBodyIdx">4</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoardBodyCreatedAt">2022-09-10 12:20:20</td>
                <td class="testBoardBodyUpdatedAt">2022-09-10 14:20:20</td>
                <td class="testBoradBodyEdit">수정</td>
                <td class="testBoradBodyDelete">삭제</td>
            </tr>
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
