@include('template.header')
<div class="testBoardMainInner">
    <table class="testBoard">
        <thead class="testBoardHead">
            <th class="testBoradHeadIdx">아마도 인덱스</th>
            <th class="testBoradHeadTitle">아마도 제목</th>
            <th class="testBoradHeadHit">아마도 조회수</th>
            <th class="testBoradHeadEdit">아마도 수정 또는 삭제 여부</th>
        </thead>
        <tbody class="testBoardBody">
            <tr>
                <td class="testBoradBodyIdx">1</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoradBodyEdit">여기 다운로드에다가 뭘 해야 할까?</td>
            </tr>
            <tr>
                <td class="testBoradBodyIdx">2</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoradBodyEdit">여기 다운로드에다가 뭘 해야 할까?</td>
            </tr>
            <tr>
                <td class="testBoradBodyIdx">3</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoradBodyEdit">여기 다운로드에다가 뭘 해야 할까?</td>
            </tr>
            <tr>
                <td class="testBoradBodyIdx">4</td>
                <td class="testBoradBodyTitle">더미더미</td>
                <td class="testBoradBodyHit">100000</td>
                <td class="testBoradBodyEdit">여기 다운로드에다가 뭘 해야 할까?</td>
            </tr>
        </tbody>
    </table>
    <button type="submit" id="testBoardCreate">등록</button>
</div>

<script>
    document.getElementById('testBoardCreate').addEventListener('click', function() {
        location.href = "{{ route("board.create") }}";
    });
</script>
@include('template.footer')
