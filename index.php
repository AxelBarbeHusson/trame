<?php
if ($file = fopen('./files/file.txt', 'r+')) {
    echo fgets($file, 10);
} else {
    echo "files doesn't exists";
};
fclose($file);

if ($file2 = fopen('./files/index3.php', 'w+')) {
    if (is_writable('./files/index3.php')) {
        $php  = '<?php' . PHP_EOL;
        $php .= '$html = "<!DOCTYPE html>";' . PHP_EOL ;
        $php .= '$html .= "<html lang=\"fr\">";' . PHP_EOL ;
        $php .= '$html .= "<head>";' . PHP_EOL ;
        $php .= '$html .= "<meta charset=\"UTF-8\">";' . PHP_EOL ;
        $php .= '$html .= "<title>Title</title>";' . PHP_EOL ;
        $php .= '$html .= "</head>";' . PHP_EOL ;
        $php .= '$html .= "<body>";' . PHP_EOL ;
        $php .= '$html .= "<h1>Le code selon Fred</h1>";' . PHP_EOL ;
        $php .= '$html .= "<p>Zombie ipsum brains reversus ab cerebellum viral inferno, brein nam rick mend grimes malum cerveau cerebro. De carne cerebro lumbering animata cervello corpora quaeritis. Summus thalamus brains sit​​, morbo basal ganglia vel maleficia? De braaaiiiins apocalypsi gorger omero prefrontal cortex undead survivor fornix dictum mauris. Hi brains mindless mortuis limbic cortex soulless creaturas optic nerve, imo evil braaiinns stalking monstra hypothalamus adventus resi hippocampus dentevil vultus brain comedat cerebella pitiutary gland viventium. Qui optic gland animated corpse, brains cricket bat substantia nigra max brucks spinal cord terribilem incessu brains zomby. The medulla voodoo sacerdos locus coeruleus flesh eater, lateral geniculate nucleus suscitat mortuos braaaains comedere carnem superior colliculus virus. Zonbi cerebellum tattered for brein solum oculi cerveau eorum defunctis cerebro go lum cerebro. Nescio brains an Undead cervello zombies. Sicut thalamus malus putrid brains voodoo horror. Nigh basal ganglia tofth eliv ingdead.</p>";' . PHP_EOL ;
        $php .= '$html .= "</body>";' . PHP_EOL ;
        $php .= '$html .= "</html>";' . PHP_EOL;
        $php .= 'echo $html;';
        fwrite($file2, $php);

    } else {
        echo "Don't working";
    }
} else {
    echo "files doesn't exists";
};
fclose($file2);

