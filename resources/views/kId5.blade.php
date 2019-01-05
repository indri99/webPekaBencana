@extends('baseKonten')

@section('content')
{{csrf_field()}}
  <div class="card-body">
    <div class="alert alert-warning">
      <h4 class="card-title" style="text-align: center; font-size: 25px">{{Konten::get('judul')}}</h4><br>
      <img src="/assets/img/imgGempa1.jpg" class="mx-auto d-block" style="width:50%">
      <br><p style="text-align: justify;">Ahli Geologi yang juga Ketua Ikatan Ahli Geologi Indonesia Sumatera Barat, Ade Edward menyebut, sejumlah daerah di bagian tengah Sumatera Barat punya potensi terjadi Likuifaksi jika terpapar gempa dengan kekuatan besar.<br>
      <br>Ia menyebut, hal ini bisa terjadi karena banyak daerah di kawasan tersebut berada di cekungan patahan gempa.<br>
      <br>"Belajar dari kejadian di Palu, potensi likuifaksi perlu diwaspadai. Tak hanya bagi daerah pesisir, tapi juga di wilayah patahan sumatera,"ungkapnya, Sabtu 3 November 2018.<br>
      <br>Wilayah yang dimaksud Ade adalah Rao, Lubuk Sikaping, Kamang Agam, Sumani-Kota Solok, Muara Labuh.<br>
      <br>"Karakteristik tanah di sini cenderung lunak karena berada di cekungan danau purba atau rawa di Patahan Sumatera. Potensinya bahkan lebih besar dibanding daerah Pesisir,"ujarnya.<br>
      <br>Upaya mitigasi kata Ade, lebih baik diarahkan ke daerah patahan sumatera sebab potensinya akan lebih dahsyat dibandingkan daerah pesisir pantai Sumbar sebab terdapat banyak sekali pemukiman penduduk.<br>
      <br>"Pesisir pantai barat Sumatera Barat lebih rendah potensi Likuifaksinya karena tidak dilalui oleh patahan yg relatif besar,"pungkasnya.<br>
      <br>Likuifaksi merupakan sebuah fenomena yang terjadi ketika tanah yang jenuh atau agak jenuh kehilangan kekuatan dan kekakuan akibat adanya tegangan, misalnya getaran gempa bumi atau perubahan ketegangan lain secara mendadak, sehingga tanah yang padat berubah wujud menjadi cairan atau air berat.<br>
      <br>Fenomena ini paling sering diamati pada tanah berpasir yang jenuh dan longgar (kepadatan rendah atau tidak padat).<br>
      <br>Fenomena ini, sebenarnya relatif tidak dikenal masyarakat. Namun, pasca terjadinya gempa Palu dan menimbulkan likuifaksi, hal ini kemudian mulai banyak diperbincangkan.</p>
    </div>
  </div>
@endsection