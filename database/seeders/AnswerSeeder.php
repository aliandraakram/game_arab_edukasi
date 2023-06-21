<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // hewan dan tumbuhan
            [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 1,
                'title' => 'a.	(qirdun) قِرْدٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 1,
                'title' => 'b.	حُوْتٌ (huutun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 1,
                'title' => 'c.  أَرْنَبٌ (arnabun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 1,
                'title' => 'd.  غَزَالٌ (ghazaalun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 2,
                'title' => 'a.	(qirdun) قِرْدٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 2,
                'title' => 'b.	حُوْتٌ (huutun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 2,
                'title' => 'c. غَنَمٌ (ghanamun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 2,
                'title' => 'd.  غَزَالٌ (ghazaalun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 3,
                'title' => 'a.	(qirdun) قِرْدٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 3,
                'title' => 'b.	حُوْتٌ (huutun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 3,
                'title' => 'c. غَنَمٌ (ghanamun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 3,
                'title' => 'd. بَطَّةٌ (baththatun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 4,
                'title' => 'a.	(qirdun) قِرْدٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 4,
                'title' => 'b.	حَمَام (hamaamatun)	',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 4,
                'title' => 'c. أَرْنَبٌ (arnabun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 4,
                'title' => 'd. بَطَّةٌ (baththatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 5,
                'title' => 'a. (Dajjajatun) دَجَّاجَةٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 5,
                'title' => 'b.	حَمَام (hamaamatun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 5,
                'title' => 'c. أَرْنَبٌ (arnabun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 1,
                'question_id' => 5,
                'title' => 'd. غَزَالٌ (ghazaalun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 6,
                'title' => 'a. ثَعْلَبٌ (tsa’labun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 6,
                'title' => 'b.	بَقَرَةٌ (baqaratun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 6,
                'title' => 'c. أَرْنَبٌ (arnabun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 6,
                'title' => 'd. جَمَلٌ (jamalun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 7,
                'title' => 'a. ثَعْلَبٌ (tsa’labun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 7,
                'title' => 'b.	بَقَرَةٌ (baqaratun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 7,
                'title' => 'c. بِطْرِيْقٌ (bithriiqun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 7,
                'title' => 'd. حُوْتٌ (huutun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 8,
                'title' => 'a. قِطَّةٌ (qiththatun)	',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 8,
                'title' => 'b.	خُفَاشٌ (khufaasy)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 8,
                'title' => 'c. عَنْكَبُوْتٌ (ankabuutun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 8,
                'title' => 'd. جَمَلٌ (jamalun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 9,
                'title' => 'a. قِطَّةٌ (qiththatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 9,
                'title' => 'b. دُلْفِين (dulfiinu)	',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 9,
                'title' => 'c. خُفَاشٌ (khufaasy)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 9,
                'title' => 'd. جَمَلٌ (jamalun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 10,
                'title' => 'a. حِصَانٌ (hishaanun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 10,
                'title' => 'b.	بَقَرَةٌ (baqaratun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 10,
                'title' => 'c. نَمْلَةٌ (namlatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 2,
                'question_id' => 10,
                'title' => 'd. ضِفْدَعٌ (dhifda’un)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 11,
                'title' => 'a.	حُوْتٌ (huutun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 11,
                'title' => 'b.	غَزَالٌ (ghazaalun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 11,
                'title' => 'c. نَمْلَةٌ (namlatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 11,
                'title' => 'd. ضِفْدَعٌ (dhifda’un)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 12,
                'title' => 'a.	فِيْلٌ (fiilun)	',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 12,
                'title' => 'b.	مَاعِزٌ (maa’izun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 12,
                'title' => 'c. زَرَافَةٌ (zaraafatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 12,
                'title' => 'd. نَحْلَةٌ (nahlatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 13,
                'title' => 'a.	جَمَلٌ (jamalun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 13,
                'title' => 'b.	مَاعِزٌ (maa’izun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 13,
                'title' => 'c. زَرَافَةٌ (zaraafatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 13,
                'title' => 'd. نَحْلَةٌ (nahlatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 14,
                'title' => 'a. فِيْلٌ (fiilun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 14,
                'title' => 'b. مَاعِزٌ (maa’izun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 14,
                'title' => 'c. زَرَافَةٌ (zaraafatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 14,
                'title' => 'd. نَحْلَةٌ (nahlatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 15,
                'title' => 'a. طَاوُوْسٌ (thaawuusun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 15,
                'title' => 'b. حِصَانٌ (hishaanun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 15,
                'title' => 'c. سُلَحْفَاةٌ (sulahfaatun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 3,
                'question_id' => 15,
                'title' => 'd. نَحْلَةٌ (nahlatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 16,
                'title' => 'a. تِمْسَاحٌ (timsaahun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 16,
                'title' => 'b. خِنْزِيْرٌ (khinziirun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 16,
                'title' => 'c. سُلَحْفَاةٌ (sulahfaatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 16,
                'title' => 'd. فَأْرَةٌ (fa`ratun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 17,
                'title' => 'a. فَرَاشَةٌ (faraasyatun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' =>17,
                'title' => 'b. فَأْرَةٌ (fa`ratun)	',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' =>17,
                'title' => 'c. سُلَحْفَاةٌ (sulahfaatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' =>17,
                'title' => 'd. بَطَّةٌ (baththatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 18,
                'title' => 'a. ذُبَابٌ (dzubaabun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 18,
                'title' => 'b. فَأْرَةٌ (fa`ratun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 18,
                'title' => 'c. حِصَانٌ (hishaanun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 18,
                'title' => 'd. بَعُوْضَةٌ (ba’uudhatun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 19,
                'title' => 'a.	ذُبَابٌ (dzubaabun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 19,
                'title' => 'b.	كَلْبٌ (kalbun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 19,
                'title' => 'c. دِيْكٌ (diikun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 19,
                'title' => 'd. عُصْفُوْرٌ (ushfuurun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 20,
                'title' => 'a. نَمِرٌ (namirun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 20,
                'title' => 'b.	قِرْدٌ (qirdun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 20,
                'title' => 'c. دِيْكٌ (diikun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 4,
                'question_id' => 20,
                'title' => 'd. عُصْفُوْرٌ (ushfuurun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 21,
                'title' => 'a. نَمِرٌ (namirun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 21,
                'title' => 'b. فَأْرَةٌ (fa`ratun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 21,
                'title' => 'c. دِيْكٌ (diikun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 21,
                'title' => 'd. عُصْفُوْرٌ (ushfuurun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 22,
                'title' => 'a. جَرَادٌ (jaraadun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 22,
                'title' => 'b. قِرْدٌ (qirdun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 22,
                'title' => 'c. دِيْكٌ (diikun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 22,
                'title' => 'd. عُصْفُوْرٌ (ushfuurun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 23,
                'title' => 'a. نَمِرٌ (namirun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 23,
                'title' => 'b.	قِرْدٌ (qirdun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 23,
                'title' => 'c. دِيْكٌ (diikun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 23,
                'title' => 'd. ثُعْبَانٌ (tsu’baanun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 24,
                'title' => 'a. نَمِرٌ (namirun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 24,
                'title' => 'b.	قِرْدٌ (qirdun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 24,
                'title' => 'c. بَقَرَةٌ (baqaratun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 24,
                'title' => 'd. عُصْفُوْرٌ (ushfuurun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 25,
                'title' => 'a. نَحْلَةٌ (nahlatun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 25,
                'title' => 'b.	قِرْدٌ (qirdun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 25,
                'title' => 'c. دِيْكٌ (diikun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 3,
                'level_id' => 5,
                'question_id' => 25,
                'title' => 'd. عُصْفُوْرٌ (ushfuurun)',
                'value' => 0,
                'skor' => 20
            ], 
            //Pekerjaan 
            [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 26,
                'title' => 'a. طَالِبٌ / thoolibun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 26,
                'title' => 'b. قَاضٍ (qoodlin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 26,
                'title' => 'c. مُسْتَشْرِقٌ / mustasyriqun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 26,
                'title' => 'd. تَاجِرٌ / taa jirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 27,
                'title' => 'a. طَالِبٌ / thoolibun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 27,
                'title' => 'b. قَاضٍ (qoodlin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 27,
                'title' => 'c. مُدَرِّسَةٌ (mudarrisatun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 27,
                'title' => 'd. تَاجِرٌ / taa jirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 28,
                'title' => 'a. طَالِبٌ / thoolibun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 28,
                'title' => 'b. قَاضٍ (qoodlin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 28,
                'title' => 'c. سَجِيْنٌ / sajiinun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 28,
                'title' => 'd. سَائِقٌ/ saaiqun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 29,
                'title' => 'a. شُرْطِيٌّ / syurthiyyun, شُرْطِيَّةٌ / syurthiyyatun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 29,
                'title' => 'b. قَاضٍ (qoodlin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 29,
                'title' => 'c. سَجِيْنٌ / sajiinun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 29,
                'title' => 'd. تَاجِرٌ / taa jirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 30,
                'title' => 'a. كَاتِبٌ / kaatibun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 30,
                'title' => 'b. طَبِيْبٌ /thobiibun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 30,
                'title' => 'c. سَجِيْنٌ / sajiinun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 6,
                'question_id' => 30,
                'title' => 'd. تَاجِرٌ / taa jirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 31,
                'title' => 'a. كَاتِبٌ / kaatibun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 31,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 31,
                'title' => 'c. طَبَّاخَةٌ/ thobbaakhatun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 31,
                'title' => 'd. تَاجِرٌ / taa jirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 32,
                'title' => 'a. طَيَّارٌ / thoyyaarun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 32,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 32,
                'title' => 'c. فَقِيْهٌ / faqiihun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 32,
                'title' => 'd. تَاجِرٌ / taa jirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 33,
                'title' => 'a. صَيَّادٌ السَّمَكِ / shoyyaadussamaki',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 33,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 33,
                'title' => 'c. طَبَّاخَةٌ/ thobbaakhatun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 33,
                'title' => 'd. سَفَّانٌ / saffaanun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 34,
                'title' => 'a. صَيَّادٌ السَّمَكِ / shoyyaadussamaki',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 34,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 34,
                'title' => 'c. فَلّاحٌ/ fallahun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 34,
                'title' => 'd. طَبِيْبُ أَسْنَانٍ (thobiibun asnaanin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 35,
                'title' => 'a. صَيَّادٌ السَّمَكِ / shoyyaadussamaki',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 35,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 35,
                'title' => 'c. بَنَّاءٌ / bannaa un',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 7,
                'question_id' => 35,
                'title' => 'd. طَبِيْبُ أَسْنَانٍ (thobiibun asnaanin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 36,
                'title' => 'a. قَاضٍ / qoodlin',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 36,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 36,
                'title' => 'c. بَنَّاءٌ / bannaa un',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 36,
                'title' => 'd. طَبِيْبُ أَسْنَانٍ (thobiibun asnaanin)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 37,
                'title' => 'a. قَاضٍ / qoodlin',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 37,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 37,
                'title' => 'c. بَنَّاءٌ / bannaa un',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 37,
                'title' => 'd. صَحَافِيٌّ (shohaafiyyun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 38,
                'title' => 'a. صَيْدَلِيٌّ / shoidaliyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 38,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 38,
                'title' => 'c. رَائِدُ الفَضَاءِ / roo idu al fadloo',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 38,
                'title' => 'd. iصَحَافِيٌّ (shohaafiyyun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 39,
                'title' => 'a. صَيْدَلِيٌّ / shoidaliyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 39,
                'title' => 'b. فَلَكِيٌّ / falakiyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 39,
                'title' => 'c. رِجَالُ الإِطْفَاءِ / rijaalul ithfaai',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 39,
                'title' => 'd. صَحَافِيٌّ (shohaafiyyun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 40,
                'title' => 'a. صَيْدَلِيٌّ / shoidaliyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 40,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 40,
                'title' => 'c. بَنَّاءٌ / bannaa un',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 8,
                'question_id' => 40,
                'title' => 'd. تَاجِرَةٌ / taa jiratunn',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 41,
                'title' => 'a. مُغَنٍّ / mughonnin',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 41,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 41,
                'title' => 'c. رِجَالُ الإِطْفَاءِ / rijaalul ithfaai',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 41,
                'title' => 'd. صَحَافِيٌّ (shohaafiyyun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 42,
                'title' => 'a. مُصَوِّرٌ (mushowwirun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 42,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 42,
                'title' => 'c. رَسَّامٌ / rossaamun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 42,
                'title' => 'd. صَحَافِيٌّ (shohaafiyyun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 43,
                'title' => 'a. مُغَنٍّ / mughonnin',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 43,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 43,
                'title' => 'c. مُدَرِّسٌ (mudarrisun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 43,
                'title' => 'd. بَنَّاؤُوْنَ / bannaa uuna',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 44,
                'title' => 'a. مُصَوِّرٌ (mushowwirun)',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 44,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 44,
                'title' => 'c. مُدَرِّسٌ (mudarrisun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 44,
                'title' => 'd. رَبَّةُ البَيْتِ / robbatul baiti',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 45,
                'title' => 'a. مُهَرِّجٌ / muharrijun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 45,
                'title' => 'b. جُنْدٌ / jundun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 45,
                'title' => 'c. مُدَرِّسٌ (mudarrisun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 9,
                'question_id' => 45,
                'title' => 'd. صَحَفِيٌّ/ sohafiqun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 46,
                'title' => 'a. مُهَرِّجٌ / muharrijun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 46,
                'title' => 'b. رَئِيْسُ جُهْمُوْرِيَّةٍ / ro iisuu juhmuuriyyatin',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 46,
                'title' => 'c. مُدَرِّسٌ (mudarrisun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 46,
                'title' => 'd. صَحَفِيٌّ/ sohafiqun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 47,
                'title' => 'a. مُهَرِّجٌ / muharrijun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 47,
                'title' => 'b. رَئِيْسُ جُهْمُوْرِيَّةٍ / ro iisuu juhmuuriyyatin',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 47,
                'title' => 'c. رِيَاضِيُّوْنَ / ri yaadliyyuna',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 47,
                'title' => 'd. مُمَثِّلَةٌ / mumatsilatun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 48,
                'title' => 'a. مُهَرِّجٌ / muharrijun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 48,
                'title' => 'b. قُرْصَانٌ / qurshoonun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 48,
                'title' => 'c. رِيَاضِيُّوْنَ / ri yaadliyyuna',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 48,
                'title' => 'd. مُمَثِّلٌ / mumatsilun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 49,
                'title' => 'a. صَيْدَلِيٌّ / shoidaliyyun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 49,
                'title' => 'b. قُرْصَانٌ / qurshoonun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 49,
                'title' => 'c. مُدِيْرٌ / mudiirun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 49,
                'title' => 'd. مُمَثِّلٌ / mumatsilatun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 50,
                'title' => 'a. مُهَرِّجٌ / muharrijun',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 50,
                'title' => 'b. صَيْدَلِيٌّ / shoidaliyyun',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 50,
                'title' => 'c. مُدَرِّسٌ (mudarrisun)',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 4,
                'level_id' => 10,
                'question_id' => 50,
                'title' => 'd. صَحَفِيٌّ/ sohafiqun',
                'value' => 0,
                'skor' => 20
            ], 
            // Benda dirumah
            [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 51,
                'title' => 'a. (Baabun) بَابٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 51,
                'title' => 'b. (Miftaahun) مِفْتَاحٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 51,
                'title' => 'c. (Kursiyyun) كُرْسِيٌّ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 51,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 52,
                'title' => 'a. (Saa’atun) سَاعَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 52,
                'title' => 'b. (Mindhodatun) مِنْضَدَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 52,
                'title' => 'c. (Kursiyyun) كُرْسِيٌّ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 52,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 53,
                'title' => 'a. (Miftaahun) مِفْتَاحٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 53,
                'title' => 'b. (Khizaanatun) خِزَانَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 53,
                'title' => 'c. (Kursiyyun) كُرْسِيٌّ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 53,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 54,
                'title' => 'a. (Miftaahun) مِفْتَاحٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 54,
                'title' => 'b. (Khizaanatun) خِزَانَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 54,
                'title' => 'c. (Kursiyyun) كُرْسِيٌّ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 54,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 55,
                'title' => 'a. (Mirwahatun) مِرْوَحَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 55,
                'title' => 'b. (Wisaadatun) وِسَادَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 55,
                'title' => 'c. (Khizaanatun) خِزَانَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 11,
                'question_id' => 55,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 56,
                'title' => 'a. (Saa’atun) سَاعَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 56,
                'title' => 'b. (Mimsahatun) مِمْسَحَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 56,
                'title' => 'c. (Misthorotun) مِسْطَرَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 56,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 57,
                'title' => 'a. (Qolansuwatun) قَلَنْسُوَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 57,
                'title' => 'b. (Qubba’atun) قُـبَّـعَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 57,
                'title' => 'c. (Hidzaaun) حِذَاءٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 57,
                'title' => 'd. (Fursyatun) فُرْشَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 58,
                'title' => 'a. (Sajjaadatun) سَجَّادَّةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 58,
                'title' => 'b. (Wisaadatun) وِسَادَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 58,
                'title' => 'c. (Misthorotun) مِسْطَرَةٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 58,
                'title' => 'd. (Fursyatun) فُرْشَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 59,
                'title' => 'a. (Qubba’atun) قُـبَّـعَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 59,
                'title' => 'b. (Hidzaaun) حِذَاءٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 59,
                'title' => 'c. (Kitaabun) كِتَابٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 59,
                'title' => 'd. (Wisaadatun) وِسَادَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 60,
                'title' => 'a. (Haqiibatun) حَقِيْبَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 60,
                'title' => 'b. (Jaurobun) جَوْرَبٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 60,
                'title' => 'c. (Qolamur roshoshi) قَلَمُ الرَّصَاصِ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 12,
                'question_id' => 60,
                'title' => 'd. (Wisaadatun) وِسَادَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 61,
                'title' => 'a. (Haqiibatun) حَقِيْبَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 61,
                'title' => 'b. (Kitaabun) كِتَابٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 61,
                'title' => 'c. (Qolamur roshoshi) قَلَمُ الرَّصَاصِ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 61,
                'title' => 'd. (Wisaadatun) وِسَادَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 62,
                'title' => 'a. (Haqiibatun) حَقِيْبَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 62,
                'title' => 'b. ( Qolamun) قَلَمٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 62,
                'title' => 'c. (Qolamur roshoshi) قَلَمُ الرَّصَاصِ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 62,
                'title' => 'd. (Wisaadatun) وِسَادَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 63,
                'title' => 'a. (Jaurobun) جَوْرَبٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 63,
                'title' => 'b. (Hidzaaun) حِذَاءٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 63,
                'title' => 'c. (Dalwun) دَلْوٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 63,
                'title' => 'd. (Wisaadatun) وِسَادَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 64,
                'title' => 'a. (Qubba’atun) قُـبَّـعَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 64,
                'title' => 'b. (Jilbaabun) جِلْبَابٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 64,
                'title' => 'c. (Dalwun) دَلْوٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 64,
                'title' => 'd. (Wisaadatun) وِسَادَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 65,
                'title' => 'a. (Sabbuurotun) سَبُّوْرَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 65,
                'title' => 'b. (Misthorotun) مِسْطَرَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 65,
                'title' => 'c. (Qolamul hibri) قَلَمُ الحِبْرِ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 13,
                'question_id' => 65,
                'title' => 'd. (Qolamun) قَلَمٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 66,
                'title' => 'a.(Kuubun) كُوْبٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 66,
                'title' => 'b.(Mil’aqotun) مِلْعَقَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 66,
                'title' => 'c. (Syaukatun) شَوْكَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 66,
                'title' => 'd. Misbaahun مِصْبَاحٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 67,
                'title' => 'a. (Mil’aqotun) مِلْعَقَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 67,
                'title' => 'b. Tilfiiziyuun تِلفزِيُوْن',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 67,
                'title' => 'c. (Syaukatun) شَوْكَةٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 67,
                'title' => 'd. Misbaahun مِصْبَاحٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 68,
                'title' => 'a. (Mil’aqotun) مِلْعَقَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 68,
                'title' => 'b. ( Kuubun) كُوْبٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 68,
                'title' => 'c. (Syaukatun) شَوْكَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 68,
                'title' => 'd. Misbaahun مِصْبَاحٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 69,
                'title' => 'a. (Qolamun) قَلَمٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 69,
                'title' => 'b. (Wisaadatun) وِسَادَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 69,
                'title' => 'c. Mighrofatun مِغْرَفَةٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 69,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 70,
                'title' => 'a. (Dalwun) دَلْوٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 70,
                'title' => 'b. (Miknasatun) مِكْنَسَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 70,
                'title' => 'c. ( Mil’aqotun) مِلْعَقَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 14,
                'question_id' => 70,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 71,
                'title' => 'a. (Mazbalatun) مَزْبَلَةٌ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 71,
                'title' => 'b. (Hidzaaun) حِذَاءٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 71,
                'title' => 'c. (Firoosyun) فِرَاشٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 71,
                'title' => 'd. (Durjun) دُرْجٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 72,
                'title' => 'a. (Syaukatun) شَوْكَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 72,
                'title' => 'b. (Mil’aqotun) مِلْعَقَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 72,
                'title' => 'c. (Firoosyun) فِرَاشٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 72,
                'title' => 'd. (Shohnun) صَحْنٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 73,
                'title' => 'a. (Mazbalatun) مَزْبَلَةٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 73,
                'title' => 'b. (Sikkiinun) السِّكِّيْنُ ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 73,
                'title' => 'c. (Qolamun) قَلَمٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 73,
                'title' => 'd. (Shohnun) صَحْنٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 74,
                'title' => 'a. (Syaukatun) شَوْكَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 74,
                'title' => 'b. (Sikkiinun) السِّكِّيْنُ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 74,
                'title' => 'c. (Ibriikun) إِبْرِيْقٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 74,
                'title' => 'd. (Shohnun) صَحْنٌ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 75,
                'title' => 'a. (Dalwun) دَلْوٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 75,
                'title' => 'b. (Saa’atun) سَاعَةٌ ',
                'value' => 0,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 75,
                'title' => 'c. (Furnun) فُرْنٌ',
                'value' => 1,
                'skor' => 20
            ], [
                'category_id'=> 1,
                'course_id' => 5,
                'level_id' => 15,
                'question_id' => 75,
                'title' => 'd. (Shohnun) صَحْنٌ',
                'value' => 0,
                'skor' => 20
            ], 
        ];

        Answer::insert($data);
    }
}
