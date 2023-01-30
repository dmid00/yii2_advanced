<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Upsetting;

/**
 * UpsettingSeatch represents the model behind the search form of `app\models\upsetting`.
 */
class UpsettingSeatch extends Upsetting
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['namesite', 'email', 'location', 'phone', 'sendEmail', 'sendPassEmail', 'locationUrl', 'selection1', 'selection2', 'selection3', 'selection4', 'selection5'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Upsetting::find();

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
        ]);

        $query->andFilterWhere(['like', 'namesite', $this->namesite])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'sendEmail', $this->sendEmail])
            ->andFilterWhere(['like', 'sendPassEmail', $this->sendPassEmail])
            ->andFilterWhere(['like', 'locationUrl', $this->locationUrl])
            ->andFilterWhere(['like', 'selection1', $this->selection1])
            ->andFilterWhere(['like', 'selection2', $this->selection2])
            ->andFilterWhere(['like', 'selection3', $this->selection3])
            ->andFilterWhere(['like', 'selection4', $this->selection4])
            ->andFilterWhere(['like', 'selection5', $this->selection5]);

        return $dataProvider;
    }
}
