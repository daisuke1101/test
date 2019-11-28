<?php
class MyMail {
    // to(宛先), subject(件名), message(本文) プロパティを定義
    public $to;
    public $subject;
    public $message;
    // その他ヘッダ情報を格納するためのプライベート変数
    private $headers = array();

    // 未定義プロパティを設定すると、$headersにその値をセット
    public function __set($name, $value) {
        $this->headers[$name] = $value;
    }
    // 未定義プロパティを取得しようとすると、$heasersから該当する値を取得
    public function __get($name) {
        return $this->headers[$name];
    }
    // 未定義プロパティをisset関数で判定すると、$headersのキーをチェック
    public function __isset($name) {
        return isset($this->headers[$name]);
    }
    // 未定義プロパティをunset関数で判定すると、$headersのキーを削除
    public function __unset($name) {
        unset ($this->headers[$name]);
    }
    // 未定義のメソッドが呼び出された場合に実行
    public function __call($name, $args) {
        // 引数が渡されなかった場合は、メソッド名に対応するキーの値を取得
        if (count($args) === 0) {
            return $this->headers[$name];
        } else {
            $this->headers[$name] = $args[0];
        }
    }
    // プロパティ情報をもとにメールを送信
    public function send() {
        foreach ($this->headers as $key => $value) {
            $key = str_replace('_', '-', $key);
            $others .= "{$key}：{$value}\n";
        }
        mb_send_mail($this->to, $this->subject, $this->message, $others);
    }
}