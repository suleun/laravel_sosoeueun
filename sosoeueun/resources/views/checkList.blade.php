<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
            <script src="/resources/dev/landing.js"></script>
        
        <title>Document</title>
    </head>
    <body>

        <div class="" id="calendar">
            calender

        </div>

        <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">이번 달 매일 해야 할 일</div>
            <div class="card-body">

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Indeterminate checkbox
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckCheckedDisabled"
                        checked="checked"
                        disabled="disabled">
                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                        Disabled checked checkbox
                    </label>

                </div>
            </div>

            <div class="card-header">오늘의 할 일</div>
            <div class="card-body">

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Indeterminate checkbox
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckCheckedDisabled"
                        checked="checked"
                        disabled="disabled">
                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                        Disabled checked checkbox
                    </label>

                </div>
            </div>

            <div class="card-header">취미</div>
            <div class="card-body">

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        Indeterminate checkbox
                    </label>
                </div>

                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        value=""
                        id="flexCheckCheckedDisabled"
                        checked="checked"
                        disabled="disabled">
                    <label class="form-check-label" for="flexCheckCheckedDisabled">
                        Disabled checked checkbox
                    </label>

                </div>
            </div>

            <!-- 일정 추가를 눌렀을 경우 -->
            <!-- Button trigger modal -->
            <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#staticBackdrop">
                Launch static backdrop modal
            </button>

            <!-- Modal -->
            <div
                class="modal fade"
                id="staticBackdrop"
                data-bs-backdrop="static"
                data-bs-keyboard="false"
                tabindex="-1"
                aria-labelledby="staticBackdropLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel"> 새 할일 추가</h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

        </body>
    </html>