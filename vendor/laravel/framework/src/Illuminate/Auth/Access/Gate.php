s = Pos; 
    Output.UV = Input[0].UV; 
    Output.Pos.x -= vecH; 
    Output.Pos.y -= vecV;   
    Output.UV.y += dv; 
	 Output.Pos = mul(Output.Pos, mWVP); 
	Stream.Append(Output); 
 
    Output.Pos = Pos; 
    Output.UV = Input[0].UV; 
    Output.Pos.x += vecH; 
    Output.Pos.y -= vecV;   
    Output.UV.x += du; 
    Output.UV.y += dv; 
	Output.Pos = mul(Output.Pos, mWVP); 
	Stream.Append(Output); 
 
	Stream.RestartStrip(); 
} 
    struct VSIn 
{ 
	float4x4 matWorld : World; 
	float3 UV : Texcoord; 
   float4 ColorModulate : Color; 
	float2 UVSize : UVSize; 
}; 
VSIn vsmain(VSIn Input) 
{ 
	return Input; 
} 
      �OUVSize  Color   Texcoord    World   vsmain  vs_4_0  gsmain  gs_4_0  Texture2DArray<float4>  psmain  ps_4_0  Texture2D<float4>   TEXTURE2D   ɃA �A Q�A (�A ��A s�A �yA �}A �}A @}A q}A }A Z�A D3D10CreateStateBlock                     .�A �A v�A �A ��A A�A I�A f�A ��A ��A �A o�A c�A ��A ��A �A ScriptString_pSize  ScriptStringCPtoX   ScriptStringFree    ScriptStringOut ScriptStringAnalyse ScriptGetFontProperties ScriptApplyDigitSubstitution    ScriptRecordDigitSubstitution   ScriptFreeCache ScriptGetProperties ScriptTextOut   ScriptJustify   ScriptBreak ScriptPlace ScriptShape ScriptItemize   usp10.dll   GetFontUnicodeRanges    GetCharWidthI   GetCharABCWidthsI   gdi32.dll             �?     �o@      �?    p?   ?           @���=          �?              �       m      �            �   �   %   �   �      �         �   �      �   �         �      J      U      B      �   !   �   �      �   �   x   �   )      �   (   -      /   �   �      n   �   5   i   7   �   9   G   ;   �   �      �   �   A   �   �   T   E   �   �   w   X      �   `   �   >   O   y   Q   C   S   �   �   �   W   �   �   $   [   �   ]   �   �      �   �   �   8   e   3   g   �   6   �   k   �   �   f   o   z   q   0   s   H   �   :   �   '   �   Y   {   �   }   d      R   �   .   �   �   �   �   �   �   �   l   �   �   �   Z   �   +   �   �   �   �      �   �   �   �   K   �   �   �   �   �   *   ^   t   �   _   �   �   �   v   �   M   �   P   �   ?      �   @   �   <   p   V   |      "   F   �   �   �   h   
       �   �   L   �   �   �   N   �   ,   �      �   �   �   �   �   �   �   I   �   =   �   �   �   c   �      �   2   �   ~   �   �   �   j   �   u   �   4   �   a   &      �   	   �   r   �   �   b      �   �   �   \   �   1   �   D   �   �       #   �          m      �            �   �   %   �   �      �         �   �      �   �         �      J      U      B      �   !   �   �      �   �   x   �   )      �   (   -      /   �   �      n   �   5   i   7   �   9   G   ;   �   �      �   �   A   �   �   T   E   �   �   w   X      �   `   �   >   O   y   Q   C   S   �   �   �   W   �   �   $   [   �   ]   �   �      �   �   �   8   e   3   g   �   6   �   k   �   �   f   o   z   q   0   s   H   �   :   �   '   �   Y   {   �   }   d      R   �   .   �   �   �   �   �   �   �   l   �   �   �   Z   �   +   �   �   �   �      �   �   �   �   K   �   �   �   �   �   *   ^   t   �   _   �   �   �   v   �   M   �   P   �   ?      �   @   �   <   p   V   |      "   F   �   �   �   h   
       �   �   L   �   �   �   N   �   ,   �      �   �   �   �   �   �   �   I   �   =   �   �   �   c   �      �   2   �   ~   �   �   �   j   �   u   �   4   �   a   &      �   	   �   r   �   �   b      �   �   �   \   �   1   �   D   �   �       #   �          k�B?�7��~?Z��H3*�H3*?����H}?�8���G��__�>]3]��i�=�^?�>Z�C�>��= �|?��>�2��Vj?�h�=�O�>En?��O��ɗ�}� �)#���m�J�J<~�H�Cr��+.=��>�F>�n?�D?�21�f�?m�m���>l맼�Η>�d?5���M֘>�W�tA�>g����c�h>��*��7�$)M?}���:�b��܌<�M���E><��_=��������}���4?���M��e5-���D?�S>����pq�˻^���ͭ�qs
>p[3?p[3?��E?���>g��>T5Q�"r��t�=����0gf���V?8�u?�km>ir!>o�)���7��#-��$�=rO7>z�y?{��1z�������>߇�=Ik�K[x�    [[x���>��_�H?�pt���p>�=:>:J?0e�j��>T:?��.�k�=Q�,?1.?�d���o;����>�l���p���S�nh?2�|�Ĵ/��!>
/i?���=\�ξ�� ��bb>��U?�&?t���*R��2A��2A>�v��Rw?���>5]O�6WM��e?��>����m?�Iq�k� ��<:��A��);�~r(��8>c�@?L�%�^c�=�3>-	X?b���)ݾ�e����=O��I�!?�?;nH>r��ۉz����2R�>����R?����'ʽ~�/?u"!?%?����	�T勾�3L?shQ�F��^��&�y?|�(��N>-�]��SR����&��./����>ِ�{��=��s��3�Ͼ�>�X2?\����7S)?�[�?EJ?73B�����]?>���RHn�H�!ʷ>�.j��=�n5c��T>���>am�>ǃ9���?�R>���r�B�>j�ľ.j�҉>�F>.�F=�z?
d&>g�v>�t���s?@0��-��f��>�;O���>b�{���=�3�h���� �E�X?*��G}�Ǹ��pD���=��#�Ĳ?���C���׾��M���׾�&K���6>B�?W�X�g���T��U�?��N?!W�>�m���YE?�G�>����Q߾�yS?Z)?C�?�����/����?�2?t@R��:�L�.�m�~?�){=���C�H?���>C��>�
?��Q?��=����Uվ�sF��Z{?�B>I��z�c�u�>���>����:?�֖�����KS?�L?��
?��۾��8�X�����C�/���i�>YRZ��%վ!�x���?��D���)��u��<?�(?�M?�(=Nay?�/���>���f��=��b����>f��>T�_��;�V}־,��ӾAdY?�m������F�>�_�|D,>�?|?��<	nt>��x�3ı; TY?��>h�?&9p�3�b?�;ę�>��K��0	?W%?S[J>��<?�Z?�M�KxB��^׾?�H?7�>4ש���~�N
w��.��� ?;��q���(P?ݘ�-��[yi?!;�>H�+?[{/�`;�>/�>
h��8+?"�?�`�>h"?c�k�@>�t�>p�'��G!?���>��>�o�MO�Fr?���=�0�>hz�Tĩ�T;C��L?.�>4��[�`�M�\9[>�'�Yf��.9?6���SR�g�G?��߾��.7?P�o�Me���x�G�>����%]?��?+P�>V,>?L�l����>�����_��^R<J�y?�	$?<�A�>>>�h�>�"?f�(��#����>�R����=�#s?�>�>�G>fgu���T>��ᾬ���s3?'�C?XXо�����>4q?7�3>!���A�.u$�6�F?-	��I��'ja��Y���>n�o?u���-���;>?�w�"��>V?ӤX?o<��>,^?P����`?�>'�����t?�0\>h�J>��8?9�O>{K)�:s=�$��;|�!ȑ��F:���p?D��>OX���Z�'?������4T=��>��o?��t?�́����d�`?�����h��,� ����>�P%?*�zV��)���<>��z�dγ=�w?�������<d��J?�Ϡ�M2� ?V?Ip�����㈵�G<���]I�NC�X�v>]�O�@�?Y� �5b6���X?I]?�-t����>Ҋ_�Ӽ�=K���i�+�_��>a�?�%�>�~�=|�m���UH�Djz?��P�q>��w��/?\^��9:��lm?j���ܺ>��?�̑=�L?�6��=��3��@�>�?k?�����޾ӿ���(?ke�޾��ٽ��R?fN�����>�=>�H��I��F�GV^>�N?ܠ�?6}?3�;�I?A}�=�?�;N�ܼy��[>KuM?�0?��J=Q�`�#j�>�R����ؾ�^�=�9f?��:?ep��/�hx���%>.8�f�.?'J2��b>�'?�gH?�ٮ>7��6�x?�_8�j�[?�u�>��O�c�����o���ƽ�.?�:�i5?� �>�b���D\�}wK��a>��� -���?d�>A�n?�v�>�E��R�?G�?�����=R�o�Ū> ?�Q�>�.;?�*s���>�:���e?�׉>I���:Yj>v�a>��r?��?F�Y��J?Ӽ'?ۢ�>D�����ޭ>M�I?�3?�%I?3T>��z�y?�@2��S$�>n�B�8]���2?, ?b��>82w?1��1��=7�=���)vT?�:$��f?9� ?Mg7���?�K�>�1�>5C>?����w�>��=p�N�a�XU��E֒��~e�S�>�OI���G�5aþ���>c�m?�Co��7��S>H�c=�~}�d!z�`�U>J+����=
�{�->LU��#����>�l���A?�?5B�>����.A?P��'�i>�W�2E���>��c?�?J�<���(�>N`�CT�>�2J�]᝾Ը?�٢>��H�o?r3�,�:�>[+�����I�e?�����
�.h��%O?PrG?) ]>6�?n�M�(-?+��<'.G�2̉>eP?Q�X����y�>�=�9��Y?k�B?�7��~?Z��H3*�H3*?����H}?�8���G��__�>]3]��i�=�^?�>Z�C�>��= �|?��>�2��Vj?�h�=�O�>En?��O��ɗ�}� �)#���m�J�J<~�H�Cr��+.=��>�F>�n?�D?�21�f�?m�m���>l맼�Η>�d?5���M֘>�W�tA�>g����c�h>��*��7�$)M?}���:�b��܌<�M���E><��_=��������}���4?���M��e5-���D?�S>����pq�˻^���ͭ�qs
>p[3?p[3?��E?���>g��>T5Q�"r��t�=����0gf���V?8�u?�km>ir!>o�)���7��#-��$�=rO7>z�y?{��1z�������>߇�=Ik�K[x�    [[x���>��_�H?�pt���p>�=:>:J?0e�j��>T:?��.�k�=Q�,?1.?�d���o;����>�l���p���S�nh?2�|�Ĵ/��!>
/i?���=\�ξ�� ��bb>��U?�&?t���*R��2A��2A>�v��Rw?���>5]O�6WM��e?��>����m?�Iq�k� ��<:��A��);�~r(��8>c�@?L�%�^c�=�3>-	X?b���)ݾ�e����=O��I�!?�?;nH>r��ۉz����2R�>����R?����'ʽ~�/?u"!?%?����	�T勾�3L?shQ�F��^��&�y?|�(��N>-�]��SR����&��./����>ِ�{��=��s��3�Ͼ�>�X2?\����7S)?�[�?EJ?73B�����]?>���RHn�H�!ʷ>�.j��=�n5c��T>���>am�>ǃ9���?�R>���r�B�>j�ľ.j�҉>�F>.�F=�z?
d&>g�v>�t���s?@0��-��f��>�;O���>b�{���=�3�h���� �E�X?*��G}�Ǹ��pD���=��#�Ĳ?���C���׾��M���׾�&K���6>B�?W�X�g���T��U�?��N?!W�>�m���YE?�G�>����Q߾�yS?Z)?C�?�����/����?�2?t@R��:�L�.�m�~?�){=���C�H?���>C��>�
?��Q?��=����Uվ�sF��Z{?�B>I��z�c�u�>���>����:?�֖�����KS?�L?��
?��۾��8�X�����C�/���i�>YRZ��%վ!�x���?��D���)��u��<?�(?�M?�(=Nay?�/���>���f��=��b����>f��>T�_��;�V}־,��ӾAdY?�m������F�>�_�|D,>�?|?��<	nt>��x�3ı; TY?��>h�?&9p�3�b?�;ę�>��K��0	?W%?S[J>��<?�Z?�M�KxB��^׾?�H?7�>4ש���~�N
w��.��� ?;��q���(P?ݘ�-��[yi?!;�>H�+?[{/�`;�>/�>
h��8+?"�?�`�>h"?c�k�@>�t�>p�'��G!?���>��>�o�MO�Fr?���=�0�>hz�Tĩ�T;C��L?.�>4��[�`�M�\9[>�'�Yf��.9?6���SR�g�G?��߾��.7?P�o�Me���x�G�>����%]?��?+P�>V,>?L�l����>�����_��^R<J�y?�	$?<�A�>>>�h�>�"?f�(��#����>�R����=�#s?�>�>�G>fgu���T>��ᾬ���s3?'�C?XXо�����>4q?7�3>!���A�.u$�6�F?-	��I��'ja��Y���>n�o?u���-���;>?�w�"��>V?ӤX?o<��>,^?P����`?�>'�����t?�0\>h�J>��8?9�O>{K)�:s=�$��;|�!ȑ��F:���p?D��>OX���Z�'?������4T=��>��o?��t?�́����d�`?�����h��,� ����>�P%?*�zV��)���<>��z�dγ=�w?�������<d��J?�Ϡ�M2� ?V?Ip�����㈵�G<���]I�NC�X�v>]�O�@�?Y� �5b6���X?I]?�-t����>Ҋ_�Ӽ�=K���i�+�_��>a�?�%�>�~�=|�m���UH�Djz?��P�q>��w��/?\^��9:��lm?j���ܺ>��?�̑=�L?�6��=��3��@�>�?k?�����޾ӿ���(?ke�޾��ٽ��R?fN�����>�=>�H��I��F�GV^>�N?ܠ�?6}?3�;�I?A}�=�?�;N�ܼy��[>KuM?�0?��J=Q�`�#j�>�R����ؾ�^�=�9f?��:?ep��/�hx���%>.8�f�.?'J2��b>�'?�gH?�ٮ>7��6�x?�_8�j�[?�u�>��O�c�����o���ƽ�.?�:�i5?� �>�b���D\�}wK��a>��� -���?d�>A�n?�v�>�E��R�?G�?�����=R�o�Ū> ?�Q�>�.;?�*s���>�:���e?�׉>I���:Yj>v�a>��r?��?F�Y��J?Ӽ'?ۢ�>D�����ޭ>M�I?�3?�%I?3T>��z�y?�@2��S$�>n�B�8]���2?, ?b��>82w?1��1��=7�=���)vT?�:$��f?9� ?Mg7���?�K�>�1�>5C>?����w�>��=p�N�a�XU��E֒��~e�S�>�OI���G�5aþ���>c�m?�Co��7��S>H�c=�~}�d!z�`�U>J+����=
�{�->LU��#����>�l���A?�?5B�>����.A?P��'�i>�W�2E���>��c?�?J�<���(�>N`�CT�>�2J�]᝾Ը?�٢>��H�o?r3�,�:�>[+�����I�e?�����
�.h��%O?PrG?) ]>6�?n�M�(-?+��<'.G�2̉>eP?Q�X����y�>�=�9��Y?k�B?�7��~?Z��H3*�H3*?   4          ��      @      @      @  ��  �    @%u�?   ����?   @33�?      �?      �   ��6?       �              �>      пSoftware\Microsoft\Direct3D GenuineIntel    DisableD3DX10PSGP   �6B 6B �<B 6B _7B 8B ]8B �8B �8B 9B v9B �9B a:B �:B Y;B �;B Q<B ;6B �I@          �?  �?  @?   �CE߿   �CE�?�n�>        {�?    {�    `/�?    G�?    ���   ���?    =@�?    &H@   @���?   ����?   ���?   �tR��    G�?    .~
@   @� @   ���@   @��?   ����?    �   ��� @    �O�?    Ҝ@   ��,@   `��@    ���?    �? @   ���?   ����?      $@      �      @   `��?   ���?   `��?    `��?   `��?   ��%�?     �˿   ��%��     ��?   ��%�?    އ�?   ����?   `t��    ��?    �r�?   `o{�?    ��?   �j��?   `t�?   `t�?   �Ѷ�?   ����?    i�ǿ    gO¿    i��?    gO�?    o�̿    歿    o��?    �?   @��?   ���?    �?   �e��?   �:"�?    Cm�?    �ư?    :�?   ��s�?   �.\�?    D}�?   �+I�?    >E�?   �.\�?   `��?   ����   �.\�?   ��B�?   ���?   `tȿ    �^�?   ��B�?   �|k�?   �W��?   @��?   ����?   ���?   ���?   �4m�?    ��?    (��?   @��?   ��@�?   ���?    ���?   @%��?   ���?   ��Լ?   �n)�?    �]�?    8�?   ��O�?   `V��?   ���?   @���?    �K�?    ���?   ��Lÿ    (��?   ��L�?   @E�ɿ   ��L��   @E��?   ��L�?   `o{Ϳ    SI��   `o{�?    SI�?   �߳�?   �P��?   ���?   �k8�?   �k8�?   �叐?   ���?    ����   �	��?   ��v�?   �=�?   �P���   @���?   `\5�?   �Ƀ�?   @�t�?   @��?   �	ˮ?   �!�?    ���?   `y$�?   ����?   `��?   ��6�?   �0m�?   �Y�?   ��n�?   �P��?    ���?    [��?    ���?    ���?   ���?   �f�?    ~̺?   �]��?   ��?    �?�?    �)�?   ����?   �ο�?   ���?   `#�?   ���?   ���?    M0�?   ��!�?    gѳ?    ��?   �:�?    ���?   �7�?   @t�?    ��?   ��n�?   �Y��?   �&G�?   �i��?   ���?    J�?   ����?   �9�?   ����?   ����?   @�?�?   ����?   ��~�?   `��?   ��׸?   `C	�?     %�?   ��̰?   �Xȿ   ��n�?   ��m�?   ��Y�?   ��m�?   �X�?   �#^Ŀ   �z�ÿ   �#^�?   �z��?   `&Ƶ�    ń�?   `&Ƶ?    ��Ϳ   @Fǡ�    ���?   @Fǡ?    (�ſ   ��!	@   `R��?      �?      �?      �?     �@      &@      ؿ      �?      �?      �?      @   �z��?   @�y�?   @�y�?   @�y�?   �z���   �z��?   ��!�?   ��E�?   �\GA@   �$I�?    ��5@   ����?   `zj/@   `UU�?   �|�"@      0@      .@      ��      L@       @      B@      <@      "@      4@     �A@     �_@      ��      ^@      P@      h@     �Q@      8@     @d@      N@      \@      U@      E@     @j@      e@     �F@                                           �                                 �                                 �                                 �                                 `                                 `                                 
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  string  $ability
     * @param  array  $arguments
     * @return bool
     */
    protected function callAuthCallback($user, $ability, array $arguments)
    {
        $callback = $this->resolveAuthCallback($user, $ability, $arguments);

        return $callback($user, ...$arguments);
    }

    /**
     * Call all of the before callbacks and return if a result is given.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  string  $ability
     * @param  array  $arguments
     * @return bool|null
     */
    protected function callBeforeCallbacks($user, $ability, array $arguments)
    {
        foreach ($this->beforeCallbacks as $before) {
            if (! $this->canBeCalledWithUser($user, $before)) {
                continue;
            }

            if (! is_null($result = $before($user, $ability, $arguments))) {
                return $result;
            }
        }
    }

    /**
     * Call all of the after callbacks with check result.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $ability
     * @param  array  $arguments
     * @param  bool  $result
     * @return bool|null
     */
    protected function callAfterCallbacks($user, $ability, array $arguments, $result)
    {
        foreach ($this->afterCallbacks as $after) {
            if (! $this->canBeCalledWithUser($user, $after)) {
                continue;
            }

            $afterResult = $after($user, $ability, $result, $arguments);

            $result = $result ?? $afterResult;
        }

        return $result;
    }

    /**
     * Resolve the callable for the given ability and arguments.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  string  $ability
     * @param  array  $arguments
     * @return callable
     */
    protected function resolveAuthCallback($user, $ability, array $arguments)
    {
        if (isset($arguments[0]) &&
            ! is_null($policy = $this->getPolicyFor($arguments[0])) &&
            $callback = $this->resolvePolicyCallback($user, $ability, $arguments, $policy)) {
            return $callback;
        }

        if (isset($this->stringCallbacks[$ability])) {
            [$class, $method] = Str::parseCallback($this->stringCallbacks[$ability]);

            if ($this->canBeCalledWithUser($user, $class, $method ?: '__invoke')) {
                return $this->abilities[$ability];
            }
        }

        if (isset($this->abilities[$ability]) &&
            $this->canBeCalledWithUser($user, $this->abilities[$ability])) {
            return $this->abilities[$ability];
        }

        return function () {
            //
        };
    }

    /**
     * Get a policy instance for a given class.
     *
     * @param  object|string  $class
     * @return mixed
     */
    public function getPolicyFor($class)
    {
        if (is_object($class)) {
            $class = get_class($class);
        }

        if (! is_string($class)) {
            return;
        }

        if (isset($this->policies[$class])) {
            return $this->resolvePolicy($this->policies[$class]);
        }

        foreach ($this->guessPolicyName($class) as $guessedPolicy) {
            if (class_exists($guessedPolicy)) {
                return $this->resolvePolicy($guessedPolicy);
            }
        }

        foreach ($this->policies as $expected => $policy) {
            if (is_subclass_of($class, $expected)) {
                return $this->resolvePolicy($policy);
            }
        }
    }

    /**
     * Guess the policy name for the given class.
     *
     * @param  string  $class
     * @return array
     */
    protected function guessPolicyName($class)
    {
        if ($this->guessPolicyNamesUsingCallback) {
            return Arr::wrap(call_user_func($this->guessPolicyNamesUsingCallback, $class));
        }

        $classDirname = str_replace('/', '\\', dirname(str_replace('\\', '/', $class)));

        return [$classDirname.'\\Policies\\'.class_basename($class).'Policy'];
    }

    /**
     * Specify a callback to be used to guess policy names.
     *
     * @param  callable  $callback
     * @return $this
     */
    public function guessPolicyNamesUsing(callable $callback)
    {
        $this->guessPolicyNamesUsingCallback = $callback;

        return $this;
    }

    /**
     * Build a policy class instance of the given type.
     *
     * @param  object|string  $class
     * @return mixed
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function resolvePolicy($class)
    {
        return $this->container->make($class);
    }

    /**
     * Resolve the callback for a policy check.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $ability
     * @param  array  $arguments
     * @param  mixed  $policy
     * @return bool|callable
     */
    protected function resolvePolicyCallback($user, $ability, array $arguments, $policy)
    {
        if (! is_callable([$policy, $this->formatAbilityToMethod($ability)])) {
            return false;
        }

        return function () use ($user, $ability, $arguments, $policy) {
            // This callback will be responsible for calling the policy's before method and
            // running this policy method if necessary. This is used to when objects are
            // mapped to policy objects in the user's configurations or on this class.
            $result = $this->callPolicyBefore(
                $policy, $user, $ability, $arguments
            );

            // When we receive a non-null result from this before method, we will return it
            // as the "final" results. This will allow developers to override the checks
            // in this policy to return the result for all rules defined in the class.
            if (! is_null($result)) {
                return $result;
            }

            $method = $this->formatAbilityToMethod($ability);

            return $this->callPolicyMethod($policy, $method, $user, $arguments);
        };
    }

    /**
     * Call the "before" method on the given policy, if applicable.
     *
     * @param  mixed  $policy
     * @param  \Illuminate\Contracts\Auth\Authenticatable  $user
     * @param  string  $ability
     * @param  array  $arguments
     * @return mixed
     */
    protected function callPolicyBefore($policy, $user, $ability, $arguments)
    {
        if (! method_exists($policy, 'before')) {
            return;
        }

        if ($this->canBeCalledWithUser($user, $policy, 'before')) {
            return $policy->before($user, $ability, ...$arguments);
        }
    }

    /**
     * Call the appropriate method on the given policy.
     *
     * @param  mixed  $policy
     * @param  string  $method
     * @param  \Illuminate\Contracts\Auth\Authenticatable|null  $user
     * @param  array  $arguments
     * @return mixed
     */
    protected function callPolicyMethod($policy, $method, $user, array $arguments)
    {
        // If this first argument is a string, that means they are passing a class name
        // to the policy. We will remove the first argument from this argument array
        // because this policy already knows what type of models it can authorize.
        if (isset($arguments[0]) && is_string($arguments[0])) {
            array_shift($arguments);
        }

        if (! is_callable([$policy, $method])) {
            return;
        }

        if ($this->canBeCalledWithUser($user, $policy, $method)) {
            return $policy->{$method}($user, ...$arguments);
        }
    }

    /**
     * Format the policy ability into a method name.
     *
     * @param  string  $ability
     * @return string
     */
    protected function formatAbilityToMethod($ability)
    {
        return strpos($ability, '-') !== false ? Str::camel($ability) : $ability;
    }

    /**
     * Get a gate instance for the given user.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable|mixed  $user
     * @return static
     */
    public function forUser($user)
    {
        $callback = function () use ($user) {
            return $user;
        };

        return new static(
            $this->container, $callback, $this->abilities,
            $this->policies, $this->beforeCallbacks, $this->afterCallbacks,
            $this->guessPolicyNamesUsingCallback
        );
    }

    /**
     * Resolve the user from the user resolver.
     *
     * @return mixed
     */
    protected function resolveUser()
    {
        return call_user_func($this->userResolver);
    }

    /**
     * Get all of the defined abilities.
     *
     * @return array
     */
    public function abilities()
    {
        return $this->abilities;
    }

    /**
     * Get all of the defined policies.
     *
     * @return array
     */
    public function policies()
    {
        return $this->policies;
    }
}
