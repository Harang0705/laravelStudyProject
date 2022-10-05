@include('template.header')
<div class="testBoardCreateInner">
    <div class="testBoardCreateTitle">
        <ul class="testBoardCreateTitleArea">
            <li class="testBoardCreateTitleText"><p>제목</p></li>
            <li class="testBoardCreateTitleInput"><input type="text" name="title" id="title" minlength="5" maxlength="30" value="{{ $board->title }}"></li>
        </ul>
    </div>
    <div class="testBoardCreateContent">
        <div class="testBoardCreateContentText">
            <p>내용</p>
        </div>
        <div class="testBoardCreateContentInput">
            <textarea name="content" id="content" cols="30" rows="10">{!! $board->content !!}</textarea>
        </div>
    </div>
    <div class="testBoardCreateButton">
        <div class="testBoardCreateButtonInner">
            <button type="submit" class="testBoardCreateButtonDesign" id="testBoardCreate">
                <p>수정하기</p>
            </button>
        </div>
    </div>
</div>

<script>
    document.getElementById('testBoardCreate').addEventListener('click', function() {
        var title = document.getElementById('title').value; // 제목
        var content = document.getElementById('content').value; // 해당글의 내용
        var splitContent = content.split('\n'); 
        var combineContent = '';
        
        // textarea에 개행문자가 포함될 경우
        if (content.includes('\n') === true) {
            var repeatNumber = splitContent.length;

            for (var i = 0; i < repeatNumber; i++) {
                combineContent += (splitContent[i] + "\n");
            }
        }

        axios.post("{{ route('board.update') }}", {
            id : "{{ $board->id }}",
            title : title,
            content : combineContent == '' ? content : combineContent
        })
        .then(function (__res) {
            if (__res['data'] === true) {
                alert('정상적으로 수정 되었습니다.');
                location.href = "{{ route('board.index') }}";
            }
        })
        .catch(function (__err) { 
            alert(__err);
        });
    });
</script>
@include('template.footer')
