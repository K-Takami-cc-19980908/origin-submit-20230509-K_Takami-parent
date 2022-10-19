// ロードイベント
window.addEventListener('load', () => {
  // 画像の上のテキスト表示
  textAppear();
  // 丸表示
  circleAppear();
});

// スクロールイベント
window.addEventListener('scroll', () => {
  // 説明のとこのテキスト表示
  explainAppear();
});

// クリックイベント
const button_1 = document.getElementsByClassName('select_button')[0];
const button_2 = document.getElementsByClassName('select_button')[1];
const button_3 = document.getElementsByClassName('select_button')[2];
const gallery_list = document.getElementsByClassName('slider_div');

button_1.addEventListener('click', () => {
  if(gallery_list[0].classList.contains('slider_div_hide')){
    gallery_list[0].classList.toggle('slider_div_hide');
    gallery_list[1].classList.add('slider_div_hide');
    gallery_list[2].classList.add('slider_div_hide');
  }
});

button_2.addEventListener('click', () => {
  if(gallery_list[1].classList.contains('slider_div_hide')){
    gallery_list[1].classList.toggle('slider_div_hide');
    gallery_list[0].classList.add('slider_div_hide');
    gallery_list[2].classList.add('slider_div_hide');
  }
});

button_3.addEventListener('click', () => {
  if(gallery_list[2].classList.contains('slider_div_hide')){
    gallery_list[2].classList.toggle('slider_div_hide');
    gallery_list[0].classList.add('slider_div_hide');
    gallery_list[1].classList.add('slider_div_hide');
  }
});

function textAppear(){
  const target = document.getElementsByClassName('top_text');
  target[0].classList.remove('top_text_before');
  target[0].classList.add('top_text_after');
}

function circleAppear(){
  const target_circle = document.getElementsByClassName('title_bg');
  const target_title = document.getElementsByClassName('circle_title');
  target_circle[0].classList.add('bg_color_1');
  target_circle[1].classList.add('bg_color_2');
  target_circle[2].classList.add('bg_color_3');
  target_title[0].classList.add('circle_title_after1');
  target_title[1].classList.add('circle_title_after2');
  target_title[2].classList.add('circle_title_after3');
}

function explainAppear(){
  const target_height = document.querySelector('.content_text').getBoundingClientRect().top;
  const windowHeight = document.body.clientHeight;
  const targets = document.querySelectorAll('.content_text');
  if(0 < target_height && target_height < windowHeight){
    Array.from(targets).forEach((targets) => {
      targets.classList.add('content_text_after');
    });
  }
}

// リンク押すとハンバーガー閉じる


const menuAnchor = document.getElementsByClassName('grobal_link');
const menuAnc = document.getElementsByClassName('grobal_anchor');
menuAnchor[3].addEventListener('click', () => {
  const menu_btn = document.getElementById('nav-input');
  menu_btn.checked = false;
});

menuAnchor[4].addEventListener('click', () => {
  const menu_btn = document.getElementById('nav-input');
  menu_btn.checked = false;
});

menuAnchor[5].addEventListener('click', () => {
  const menu_btn = document.getElementById('nav-input');
  menu_btn.checked = false;
});
