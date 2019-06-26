


// chatworkイベントの準備
let mySelf = true;

let submit = document.getElementById('add');
submit.addEventListener('click', function(){

    // 1.画面の入力欄一覧
    let inputMessage = document.getElementById('task');
    // 2.画面の入力値を取得
    let messageText = inputMessage.value;
    // 3.もし何も入力されなかったら中断
    if(messageText == ''){
        return;
    }

    let div = messageBox();

    let p = message(messageText);

    // 10.作成したpタグをdivに追加
    div.appendChild(p);
    console.log(div);


    // 11.class="room"をいうdivを取得する
    let room = document.getElementById('room');
    // 12.roomというdivに先ほど作成したdivを追加する
    room.appendChild(div);
    // 13.画面の入力値をリセットする。
    inputMessage.value ='';
    
    // 返信者を変更する
    if(mySelf) {
        mySelf = false;
    } else {
        mySelf = true;
    }


    
    // // ゴミ箱アイコン
    // let removeIcon = document.createElement('<i class="far fa-trash-alt fa-lg"></i>');

    // // アイコンのボタンをまとめるdivを作成
    // let buttons = document.createElement('div');
    // buttons.addclass('buttons');

    // // 削除ボタンを作成
    // let remove = document.createElement('button');
    // remove.textContent = '削除';
    // remove.classList.add('remove');
    // remove.innerHTML(removeIcon);

    // // buttonsのdivに追加
    // buttons.appendChild(remove);

    // // roomにbuttonsを追加
    // room.appendChild(buttons);

    

});

function messageBox() {
    // 4.divを作成
    let div = document.createElement('div');
    // 5.
    if(mySelf){
        // もし、自分が送信者の場合、[box-right]というクラスをdivに追加
        div.classList.add('box-right');
    } else {
        // もし、自分以外が送信者の場合、[box-left]というクラスをdivに追加
        div.classList.add('box-left');
    }
    return div;

    
}

function message(messageText){
    // 6.pタグを作成
    let p = document.createElement('p');
    // 7.pタグに画面の入力値を設定
    p.textContent = messageText;
    // 8.pタグに[message-box]というクラスを追加
    p.classList.add('message-box');

    // 9.
    if(mySelf){
        p.classList.add('me');
    } else {
        p.classList.add('other');
    }
    return(p);

}