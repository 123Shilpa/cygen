
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function login(){
$url = 'http://graph.facebook.com/shashankvaishnav/picture';
$data = file_get_contents($url);
$fileName = 'fb_profilepic.jpg';
$file = fopen($fileName, 'w+');
fputs($file, $data);
fclose($file);
}
</script>

<input type="submit" onClick="login()"; />

<script>
class CurlHelper
{
  /**
   * Downloads a file from a url and returns the temporary file path.
   * @param string $url
   * @return string The file path
   */
  public static function downloadFile($url, $options = array())
  {
    if (!is_array($options))
      $options = array();
    $options = array_merge(array(
        'connectionTimeout' => 5, // seconds
        'timeout' => 10, // seconds
        'sslVerifyPeer' => false,
        'followLocation' => false, // if true, limit recursive redirection by
        'maxRedirs' => 1, // setting value for "maxRedirs"
        ), $options);

    // create a temporary file (we are assuming that we can write to the system's temporary directory)
    $tempFileName = tempnam(sys_get_temp_dir(), '');
    $fh = fopen($tempFileName, 'w');

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_FILE, $fh);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $options['connectionTimeout']);
    curl_setopt($curl, CURLOPT_TIMEOUT, $options['timeout']);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $options['sslVerifyPeer']);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, $options['followLocation']);
    curl_setopt($curl, CURLOPT_MAXREDIRS, $options['maxRedirs']);
    curl_exec($curl);

    curl_close($curl);
    fclose($fh);

    return $tempFileName;
  }
}

    $url = 'http://graph.facebook.com/shashankvaishnav/picture';
$sourceFilePath = CurlHelper::downloadFile($url, array(
  'followLocation' => true,
  'maxRedirs' => 5,
));
</script>