<style>
    #view-product-list{
        position: relative;
    }
    .success-order{
        position: fixed;
        z-index: 100;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 0 5px;
        left: 30%;
        right: 30%;
        top: 20%;
        display: none;
    }
    @media only screen and (max-width: 768px) {
        .success-order{
            left: 5px;
            right: 5px;
        }
    }
</style>

<!--Modal-->
<div class="success-order" id="success-order">
    <div class="swal-icon swal-icon--success">
        <span class="swal-icon--success__line swal-icon--success__line--long"></span>
        <span class="swal-icon--success__line swal-icon--success__line--tip"></span>

        <div class="swal-icon--success__ring"></div>
        <div class="swal-icon--success__hide-corners"></div>
    </div>
    <div class="swal-title" style="">Thêm vào giỏ hàng thành công!</div>
    <div class="swal-footer" style="text-align: center;">
        <div class="swal-button-container">

            {{-- <button class="swal-button swal-button--confirm" onclick="success()">Đóng</button> --}}

            <div class="swal-button__loader">
                <div></div>
                <div></div>
                <div></div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
    var c = 0;
    function success(){
        if(c==0){
            document.getElementById("success-order").style.display = "block";
            c = 1;
        }
    }
</script>