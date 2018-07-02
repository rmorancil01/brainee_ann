<?php

namespace backend\modules\announcements\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\announcements\models\Announcements;

/**
 * AnnouncementsSearch represents the model behind the search form of `backend\modules\announcements\models\Announcements`.
 */
class AnnouncementsSearch extends Announcements
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'senderId', 'receiverId', 'status'], 'integer'],
            [['ann_subject', 'ann_body', 'toEmail', 'dur_start', 'dur_end'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Announcements::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'senderId' => $this->senderId,
            'receiverId' => $this->receiverId,
            //'topicId' => $this->topicId,
            'dur_start' => $this->dur_start,
            'dur_end' => $this->dur_end,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ann_subject', $this->ann_subject])
            ->andFilterWhere(['like', 'ann_body', $this->ann_body])
            ->andFilterWhere(['like', 'toEmail', $this->toEmail]);

        return $dataProvider;
    }
}
