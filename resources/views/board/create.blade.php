@include('template.header')
<div class="testBoardCreateInner">
    <div class="testBoardCreateTitle">
        <ul class="testBoardCreateTitleArea">
            <li class="testBoardCreateTitleText"><p>제목</p></li>
            <li class="testBoardCreateTitleInput"><input type="text" name="title" id="testBoardTitle" minlength="5" maxlength="30"></li>
        </ul>
    </div>
    <div class="testBoardCreateContent">
        <div class="testBoardCreateContentText">
            <p>내용</p>
        </div>
        <div class="testBoardCreateContentInput">
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="testBoardCreateButton">
        <div class="testBoardCreateButtonInner">
            <button type="submit" class="testBoardCreateButtonDesign" id="testBoardCreateButton">
                <p>등록하기</p>
            </button>
        </div>
    </div>
</div>

<script>

</script>
@include('template.footer')
