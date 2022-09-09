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
    </div>
</div>
@include('template.footer')
